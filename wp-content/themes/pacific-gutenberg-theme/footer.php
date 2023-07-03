<?php

  $footer_information = array(
    'header' => get_field('header', 'options'),
    'links' => get_field('links', 'options'),
    'copyrightText' => get_field('copyright_text', 'options'),
  );

  $footerContent = $footer_information['header'];
  $buttons = $footerContent['button_wrap'];

  $links = $footer_information['links'];
  $copyrights = $footer_information['copyrightText'];
  $quizQuestions = get_field('question_quiz', 'options');


?>

<script>
 
    jQuery(document).ready(function($) {
        var currentQuestion = 0; // Track the current question
        var answers = []; // Array to store selected answers

        // Define an array of questions and their corresponding options
        var questions = <?php echo json_encode($quizQuestions); ?>;

        function displayQuestion() {
          var question = questions[currentQuestion];
          var answer = answers[currentQuestion];
          var options = [];

          // Iterate through the question options and fetch the corresponding ACF fields
          for (var i = 1; i <= 2; i++) {
            var answerKey = 'answer_' + i;
            if (question[answerKey]) {
              options.push(question[answerKey]);
            }
          }

          var buttonsHTML = options
            .map(
              (option) =>
                `<button class="formButton ${
                  answer === option ? 'selected' : ''
                }">${option}</button>`
            )
            .join('');

          var quizFormContent = `
            <h6 class="goldenLink h4-font-size">${question.question}</h6>
            <div class="buttonsWrap buttonsWrapCenter">
              ${buttonsHTML}
            </div>
          `;

          $("#quiz-form").html(quizFormContent);

          if (currentQuestion > 0) {
            $("#go-back-button").show();
          } else {
            $("#go-back-button").hide();
          }
        }

        function handleButtonClick() {
          var answer = $(this).text();
          if (answer) {
            answers[currentQuestion] = answer;
            currentQuestion++;
            if (currentQuestion < questions.length) {
              displayQuestion();
            } else {
              // Show the message or shortcode
              var message;
              if (
                answers[0] === 'Yes' &&
                answers[1] === 'Business' &&
                answers[2] === 'Greater than $100,000'
              ) {
                var shortcode = "[gravityform id='YOUR_FORM_ID' title='Quiz Form']";
                message = `<p class="goldenLink h4-font-size">Thank you for your interest in BanescoSelect.</p><br><p>Here is the shortcode for the Gravity Form: ${shortcode}</p>`;
              } else {
                message = `<p class="goldenLink h4-font-size">Thank you for your interest in BanescoSelect.</p><br><p>Based on the information you provided, we consider that Banesco USA is the better option to serve your relationship`;
                $('#visitBanescousa').show();
              }
              $("#quiz-form").html(message);
            }
          }
        }

        function goBack() {
          if (currentQuestion > 0) {
            currentQuestion--;
            $('#visitBanescousa').hide();
            displayQuestion();
          }
        }

        $(document).on('click', '.formButton', handleButtonClick);
        $(document).on('click', '#go-back-button', goBack);

        // Initial question display
        displayQuestion();
      });
</script>
<footer class="BanescoSelect main-footer lightFont headingRecife-Parent fontWeight300">
  <div class="container-640">
     <div class="footer-inner center-align">
         <h5 class="h1-font-size"><?= $footerContent['title']; ?></h5>
         <h6 class="h4-font-size"><?= $footerContent['normal_text']; ?></h6>
         <div id="quiz-form">
            
         </div>
         <div class="buttonsWrap buttonsWrapFooter" id="go-back-button" style="display: none; margin: 50px 0">
             <button class="sButton sButton-icon sButton-left lightFont sButton-fullwidth">
                 <img src="<?= get_template_directory_uri(); ?>/assets/icons/arrow_left_white.svg" alt="arrow left" />
                 <span>Go Back</span>
             </button>
             <a id="visitBanescousa" style="display: none;" href="#" class="sButton sButton-icon sButton-right lightFont sButton-fullwidth">
                 <span>Visit Banesco USA</span>
                 <img src="<?= get_template_directory_uri(); ?>/assets/icons/arrow_right_white.svg" alt="arrow right" />
             </a>
         </div>
     </div>
 </div>
  <div class="container-640 footer-bottom-img">
    <img src="<?= get_template_directory_uri();?>/dist/img/footer-selected.webp" alt="Banesco Selected Footer Image"/>
  </div>
  <div class="footer-bottom">
    <ul id="menu-footer-menu-3" class="footerMenu">
      <?php
      if (!empty($links)) {
          foreach ($links as $link) {
              $thelink = $link['link'];
              $label = $thelink['title'];
              $url = $thelink['url'];
              ?>
              <li class="menu-item">
              <a href="<?php echo $url; ?>" class="">
                  <?php
                  echo $label;
                  ?>
              </a>
              </li>
              <?php
          }
      }
      ?>      
    </ul> 
    <div class="copyright-part">
      <?= $copyrights; ?>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>
<a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

<script src="https://cdn.jsdelivr.net/npm/trig-js/src/trig.min.js"></script>

</body>
</html>
