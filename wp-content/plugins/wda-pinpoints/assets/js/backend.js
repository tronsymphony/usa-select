var $backend = function() {
    "use strict";
    
    var dom_category_form = "form#addtag, form#edittag, form#post",
        dom_category_parent_select = "select#parent, select#newlocation_category_parent";
    
    /**
     * Removes the parent category selector from the UI.
     */
    
    function unsetParentCategory() {
        var category_form = jQuery( dom_category_form ),
            category_parent_select = jQuery( dom_category_parent_select );
        
        if ( category_form.length === 1 ) {
            category_parent_select.remove();
        }
    }
    
    /**
     * Kickstarts the functionality.
     */
    
    $backend.run = function() {
        unsetParentCategory();
    };
    
    return $backend;
};

jQuery( document ).ready( function() {
    $backend().run();
});