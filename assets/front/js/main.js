let j = jQuery.noConflict();
j(document).ready(function () {
    let tabs = j('.tabs li a');
    tabs.click(function (){
        let content = this.hash.replace('/','');
        tabs.removeClass("active");
        j(this).addClass("active");
        j('#content').find('div').hide();
        j(content).fadeIn(200);
    });
});