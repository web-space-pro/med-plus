try {
    window.jQuery = window.$ = require('jquery');
   // require("lazysizes/lazysizes.min");
   require("./vendors");
   require("./modules/input_mask");
   require("./modules/menu");
   require("./modules/generall");
   require("./modules/swiper");
   require("./modules/photoSwipe");
   require("./modules/toogleBtn");



}
catch (e) {
    console.log('JS ERROR!!!', e);
}