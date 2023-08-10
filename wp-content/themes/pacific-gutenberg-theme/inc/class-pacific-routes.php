<?php
class Pacific_Routes {
  public function __construct() {
    $this->register_routes();
  }

  public function register_routes() {
    add_action( 'rest_api_init', array( $this, 'register_options_route' ) );
    add_action( 'rest_api_init', array( $this, 'register_quiz_route' ) );
    add_action( 'rest_api_init', array( $this, 'register_search_route' ) );
  }

  public function register_search_route() {
    register_rest_route( 'searchfor/v1', 'searchtext', array(
      'methods'             => WP_REST_Server::READABLE,
      'callback'            => array( $this, 'search_all' ),
      'permission_callback' => '__return_true',
    ));
  }

  public function register_options_route() {
    register_rest_route( 'menu-items/v1', 'options', array(
      'methods'             => WP_REST_Server::READABLE,
      'callback'            => array( $this, 'get_options_data' ),
      'permission_callback' => '__return_true',
    ));
  }

  public function register_quiz_route() {
    register_rest_route( 'quiz/v1', 'quiz-item', array(
      'methods'             => WP_REST_Server::READABLE,
      'callback'            => array( $this, 'get_quiz_item' ),
      'permission_callback' => '__return_true',
    ));
  }

  public function search_all( $data ) {
    $search_term = $data->get_param( 'search_term' );

    $search_query = new WP_Query( array(
      'post_type'      => 'page',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      's'              => $search_term,
      'fields'         => 'ids',
      'nopaging'       => true,
      'exact_title'    => true,
      'sentence'       => false,
      'search_title'   => true,
    ));

    $options_html = '';
    $count = 0;

    if ($search_query->have_posts()) {
      while ($search_query->have_posts()) {
        $search_query->the_post();
        $page_title = get_the_title();
        if (stripos($page_title, $search_term) !== false) {
          $count++;
          $options_html .= '<div class="search-result-item" data-target-value="' . get_permalink() . '">' . $page_title . '</div>';
        }
        //$options_html .= '<div class="search-result-item" data-target-value="' . get_permalink() . '">' . get_the_title() . '</div>';
      }
    }

    $response_data = array(
      'count' => $count,
      'html' => $options_html,
      'product_page' => get_field('search_product_page', 'options'),
    );

    $response = new WP_REST_Response( $response_data );
    return rest_ensure_response( $response );
}

  public function get_quiz_item( $request ) {
    $quiz_item = $request->get_param( 'quiz_item' );
    $quiz_items = get_field('footer_quiz', 'options');
    $html = '';

    if ($quiz_items) {
      foreach ($quiz_items as $item) {
        if ($item['quiz_id'] === $quiz_item) {
          $quiz_id = $item['quiz_id'];
          $quiz_question = $item['quiz_question'];
          $quiz_answers = $item['quiz_answers'];
          $first_button_title = $item['quiz_buttons']['first_button_title'];
          $first_button_action = $item['quiz_buttons']['first_button_action'];
          $second_button_title = $item['quiz_buttons']['second_button_title'];
          $second_button_action = $item['quiz_buttons']['second_button_action'];
          $first_link_title = $item['quiz_links']['first_link_title'];
          $first_link_action = $item['quiz_links']['first_link_action'];
          $second_link_title = $item['quiz_links']['second_link_title'];
          $second_link_action = $item['quiz_links']['second_link_action'];
          $add_content = $item['add_content'];
          $quiz_content = $item['quiz_content'];

          $quiz_question = Pacific_Helper::generate_paragraph(array(
            'text' => $quiz_question,
            'class' => 'footer__quiz-question',
          ));

          $first_button_title = Pacific_Helper::generate_paragraph(array(
            'text' => $first_button_title,
            'class' => 'footer__answers-item',
            'attributes' => array(
              'data-quizaction' => $first_button_action
            ),
            'top-text' => $item['quiz_buttons']['first_button_top_title'],
          ));

          $second_button_title = Pacific_Helper::generate_paragraph(array(
            'text' => $second_button_title,
            'class' => 'footer__answers-item',
            'attributes' => array(
              'data-quizaction' => $second_button_action
            ),
            'top-text' => $item['quiz_buttons']['second_button_top_title'],
          ));

          $first_link_title = Pacific_Helper::generate_paragraph(array(
            'text' => $first_link_title,
            'class' => 'footer__answers-item footer__back-to-previous',
            'attributes' => array(
              'data-quizaction' => $first_link_action
            )
          ));

          $second_link_title = Pacific_Helper::generate_paragraph(array(
            'text' => $second_link_title,
            'class' => 'footer__answers-item',
            'attributes' => array(
              'data-quizaction' => $second_link_action
            )
          ));

          $quiz_content = Pacific_Helper::generate_paragraph(array(
            'text' => $quiz_content,
            'class' => 'footer__quiz-content',
          ));

          $html .= '<div class="footer__quiz" data-quizid=' . $quiz_id . '>';
          $html .= '<div class="footer__quiz-content">';
          $html .= $quiz_question;

          if ( $add_content && $quiz_content ) {
            $html .= $quiz_content;
          }

          $html .= '<div class="footer__quiz-answers ' . $quiz_answers . '">';

          if ( $quiz_answers == 'buttons' ) {
            $html .= $first_button_title;
            $html .= $second_button_title;
          } 
            
          if ( $quiz_answers == 'links' ) {
            $html .= $first_link_title;
            $html .= $second_link_title;
          }

          $html .= '</div></div></div>';
        }
      }
    }

    $json_data = array(
      'html' => $html
    );

    wp_send_json_success($json_data);
  }

  public function get_options_data( $request ) {
    $parent_item = $request->get_param( 'parent_item' );
    $navigation_items = get_field('navigation_items', 'options');
    $data_array = array();

    if ($navigation_items) {
      foreach ($navigation_items as $item) {
        if ($item['parent_item'] === $parent_item) {
          $item_image_desktop = Pacific_Helper::generate_image( array(
            'image' => $item['desktop_item_image'],
            'class' => 'header__dropdown-image--desktop',
            'attributes' => array(
              'title' => $item['desktop_item_image'] ? $item['desktop_item_image']['title'] : null,
              'alt' => $item['desktop_item_image'] ? $item['desktop_item_image']['title'] : null
            )
          ));

          $item_image_mobile = Pacific_Helper::generate_image( array(
            'image' => $item['mobile_item_image'],
            'class' => 'header__dropdown-image--mobile',
            'attributes' => array(
              'title' => $item['mobile_item_image'] ? $item['mobile_item_image']['title'] : null,
              'alt' => $item['mobile_item_image'] ? $item['mobile_item_image']['title'] : null
            )
          ));
  
          $item_links = Pacific_Helper::generate_wysiwyg(array(
            'content'  => $item['navigation_links'],
            'classes' => array('header__dropdown-links'),
          ));

          $column_wrapper = array(
            'html' => '<div class="header__dropdown-wrapper">
                        <div class="header__dropdown-container">
                          <div class="header__inner-wrapper">' .
                            $item_image_desktop .
                            $item_image_mobile .
                            $item_links .
                          '</div>
                        </div>
                      </div>'
          );
        }
      }
    }

    $response = new WP_REST_Response( $column_wrapper );
    return rest_ensure_response( $response );
  }

  public function stringify_template( $template_name, $part_name = null, $args = array() ) {
    ob_start();
    get_template_part( $template_name, $part_name, $args );
    $template = ob_get_contents();
    ob_end_clean();
    return $template;
  }
}

new Pacific_Routes();
