angular.module('rootApp').run(['$templateCache', function($templateCache) {
  'use strict';

  $templateCache.put('views/cats.html',
    "<ion-view view-title=\"{{ view_title }}\"> <ion-content ng-show=\"cats.length == 0\"> <p class=\"item-text-wrap padding text-center\"> Sorry but there is no items to be shown </p> </ion-content> <ion-content ng-show=\"cats.length > 0\" overflow-scroll=\"true\"> <ion-list class=\"list-borderless\"> <li ng-repeat=\"cat in cats\" class=\"item\"> <a ui-sref=\"{{ (cat.children.length > 0) ? 'cats({catId:cat.id})' : 'contents({catId:cat.id})' }}\" class=\"subdued\"> <div class=\"item-content bottom-shadow rounded\" style=\"position: relative\"> <div class=\"item-skew\"> <img ng-src=\"{{ root }}files/categories/photo/{{ cat.photo_dir }}/landscape_{{ cat.photo }}\"> </div> <div class=\"item-text-wrap padding\" style=\"position: absolute;width: 60%;height: 100%\"> <h2 class=\"font-bold1\">{{ cat.title }}</h2> </div> </div> </a> </li> </ion-list> </ion-content> </ion-view>"
  );


  $templateCache.put('views/contents-slides.html',
    "<ion-modal-view> <ion-header-bar> <button class=\"button icon ion-close positive\" ng-click=\"modal.hide()\" style=\"border: none;background-color: transparent\"></button> <h2 class=\"title\">{{ titles[active_slide] }}</h2> </ion-header-bar> <ion-content> <ion-slide-box active-slide=\"active_slide\" on-slide-changed=\"change()\"> <ion-slide ng-repeat=\"item in items\" style=\"padding-top: 0\"> <div class=\"padding\"> <div class=\"item-image\"> <img ng-src=\"{{ root }}files/contents/photo/{{ item.photo_dir }}/{{ item.photo }}\"> </div> <p class=\"item-text-wrap\">{{ item.text }}</p> </div> </ion-slide> </ion-slide-box> </ion-content> </ion-modal-view>"
  );


  $templateCache.put('views/contents.html',
    "<ion-view> <ion-content ng-show=\"items.length == 0\"> <p class=\"item-text-wrap padding text-center\"> Sorry but there is no items to be shown </p> </ion-content> <ion-content ng-show=\"items.length > 0\"> <ion-list> <a ng-repeat=\"item in items\" ng-click=\"openModal({{ $index }})\" class=\"item item-thumbnail-left\"> <img ng-src=\"{{ root }}files/contents/photo/{{ item.photo_dir }}/200_{{ item.photo }}\"> <h2>{{ item.title }}</h2> <p>{{ item.text }}</p> </a> </ion-list> </ion-content> </ion-view>"
  );


  $templateCache.put('views/details.html',
    "<p>This is the details view.</p>"
  );


  $templateCache.put('views/gallery.html',
    "<p>This is the gallery view.</p>"
  );


  $templateCache.put('views/info.html',
    "<p>This is the info view.</p>"
  );


  $templateCache.put('views/main-tabs.html',
    "<!--\n" +
    "Create tabs with an icon and label, using the tabs-positive style.\n" +
    "Each tab's child <ion-nav-view> directive will have its own\n" +
    "navigation history that also transitions its views in and out.\n" +
    "--> <ion-tabs class=\"tabs-icon-top tabs-positive\"> <!-- Categories Tab --> <ion-tab title=\"Home\" icon-off=\"ion-ios-home-outline\" icon-on=\"ion-ios-home\" href=\"#/tab/cats\"> <ion-nav-view name=\"tab-cats\"></ion-nav-view> </ion-tab> </ion-tabs>"
  );


  $templateCache.put('views/welcome.html',
    "<ion-view hide-nav-bar=\"true\" class=\"welcome-view {{ started }}\" ng-click=\"startApp()\"> <ion-header-bar class=\"welcome-header\" id=\"welcome-header\"></ion-header-bar> <div class=\"div-logo\"></div> <img class=\"madalya\" src=\"images/madalya.png\"> </ion-view>"
  );

}]);
