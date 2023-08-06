# [Lonica CSS](https://github.com/allencasul/Lonica) ![](https://img.shields.io/github/package-json/v/allencasul/Lonica) [![](https://data.jsdelivr.com/v1/package/npm/Lonica/badge)](https://www.jsdelivr.com/package/npm/Lonica) ![Github](https://img.shields.io/github/license/allencasul/Lonica?logo=Github)


An open-source design system framework that provides access to pre-built class components to quickly build modern web apps or use built-in utility classes to write custom CSS directly inside your markup.

<!-- <img src="#" style="max-width:100%;" width="325"> -->

## Installation

Installing Lonica CSS

### Utilizing Framework via NPM

```sh
npm install lonica
```

Overview:

## Framework Description

**Lonica** is a lightweight design system framework primarily for building hybrid mobile app user interfaces. It is designed to simplify the process of building websites and applications by providing a set of pre-designed UI elements, layout structures, and reusable components that can be easily customized to fit specific project requirements. Lonica CSS Framework comes with a simple and intuitive Documentation, making it easy for both beginners and experienced developers to use it. Its responsive nature allows it to adapt to different screen sizes, making it ideal for building mobile-first web applications.

## Browser Support

- Chrome
- Edge
- Firefox
- Opera & any modern browser

### HTML Template

Create index.html file, and copy paste the boilerplate below.

```sh
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover"/>
  <meta name="color-scheme" content="light"/>
  <meta name="theme-color" content="#7542F1"/>
  <meta name="description" content="Lonica CSS Framework, your front-end development partner."/>
  <meta name="keywords" content="Lonica CSS Framework, lonica"/>
  <link rel="stylesheet" href="style.css">
  <script defer src="node_modules/lonica/js/jquery.min.js"></script>
  <script defer src="https://kit.fontawesome.com/1e8d61f212.js"></script>
  <title>Lonica CSS: Modern CSS Framework</title>
</head>
<body>

  <section>
  <!--APP BAR-->
  </section>

  <section>
  <!--DROP DOWN MENU-->
  </section>

  <section>
  <!--FLOATING ACTION BUTTON-->
  </section>

  <section>
  <!--BOTTOM NAVIGATION BAR-->
  </section>

  <section>
  <!--SEARCH-->
  </section>

  <section>
  <!--BOTTOM SHEET DIALOG-->
  </section>

  <section>
  <!--SIDE BAR-->
  </section>

  <section>
  <!--ALERT DIALOG-->
  </section>

  <section>
  <!--TOAST-->
  </section>

  <section>
  <!--CARD-->
  </section>

  <section>
  <!--PRELOADER-->
    <div class="primary-preloader-overlay" id="primaryPreloaderOverlay">
      <div class="primary-preloader-container">
        <div class="primary-preloader-content-container">
          <div class="primary-preloader">

          </div>
        </div>
      </div>
    </div>
  </section>

  <script defer src="node_modules/lonica/js/components.min.js"></script>
</body>
</html>
```

### CSS Template

Create style.css file, and copy paste the code below.

```sh
/* lonica | Under MIT License | github.com/allencasul/lonica */

/*--------- Utilities ---------*/
@import 'node_modules/lonica/css/utilities/utilities.min.css';

/*--------- Components ---------*/
@import 'node_modules/lonica/css/components/preloader.css';
@import 'node_modules/lonica/css/components/app-bar.css';
@import 'node_modules/lonica/css/components/side-bar.css';
@import 'node_modules/lonica/css/components/floating-action-button.css';
@import 'node_modules/lonica/css/components/bottom-navigation-bar.css';
@import 'node_modules/lonica/css/components/drop-down-menu.css';
@import 'node_modules/lonica/css/components/alert-dialog.css';
@import 'node_modules/lonica/css/components/bottom-sheet-dialog.css';
@import 'node_modules/lonica/css/components/toast.css';
@import 'node_modules/lonica/css/components/card.css';
@import 'node_modules/lonica/css/components/input.css';
@import 'node_modules/lonica/css/components/checkbox.css';
@import 'node_modules/lonica/css/components/button.css';
@import 'node_modules/lonica/css/components/stepper.css';
@import 'node_modules/lonica/css/components/onboarding-screen.css';
@import 'node_modules/lonica/css/components/table.css';

@media screen and (min-width: 768px) {
  /*--------- Tablet ---------*/
}

@media screen and (min-width: 1126px) {
  /*--------- Desktop ---------*/
}   
```

### Utilizing Components

Use all available pre-made components below:


### Preloader

```sh
<div class="primary-preloader-overlay" id="primaryPreloaderOverlay">
  <div class="primary-preloader-container">
    <div class="primary-preloader-content-container">
      <div class="primary-preloader">

      </div>
    </div>
  </div>
</div>

------------------------------------------------------------------

<div class="secondary-preloader-overlay" id="secondaryPreloaderOverlay">
  <div class="secondary-preloader-container">
    <div class="secondary-preloader-content-container">
      <div class="secondary-preloader">

      </div>
    </div>
  </div>
</div>

------------------------------------------------------------------

<div class="tertiary-preloader-overlay" id="tertiaryPreloaderOverlay">
  <div class="tertiary-preloader-container">
    <div class="tertiary-preloader-content-container">
      <div class="tertiary-preloader">

      </div>
    </div>
  </div>
</div>

------------------------------------------------------------------

<div class="quaternary-preloader-overlay" id="quaternaryPreloaderOverlay">
  <div class="quaternary-preloader-container">
    <div class="quaternary-preloader-content-container">
      <div class="quaternary-preloader">

      </div>
    </div>
  </div>
</div>

------------------------------------------------------------------

<div class="quinary-preloader-overlay" id="quinaryPreloaderOverlay">
  <div class="quinary-preloader-container">
    <div class="quinary-preloader-content-container">
      <div class="quinary-preloader">
        <img class="quinary-pulse-gif" src="https://firebasestorage.googleapis.com/v0/b/lonica.appspot.com/o/gif%2Fpulse.gif?alt=media&token=050845aa-4a5c-4262-b214-2aaae48c2935">
      </div>
    </div>
  </div>
</div>

------------------------------------------------------------------

<div class="senary-preloader-overlay" id="senaryPreloaderOverlay">
  <div class="senary-preloader-container">
    <div class="senary-preloader-content-container">
      <div class="senary-preloader">

      </div>
      <div class="senary-preloader-text">
        Loading, please wait...
      </div>
    </div>
  </div>
</div>

------------------------------------------------------------------

<div class="septenary-preloader-overlay" id="septenaryPreloaderOverlay">
  <div class="septenary-preloader-container">
    <div class="septenary-preloader-text">Processing...</div>
    <div class="septenary-preloader-content-container">
      <div class="septenary-preloader">

      </div>
    </div>
  </div>
</div>

------------------------------------------------------------------

<div class="octonary-preloader-overlay" id="octonaryPreloaderOverlay">
  <div class="octonary-preloader-container">
    <div class="octonary-preloader-content-container">
      <div class="octonary-preloader">

      </div>
    </div>
  </div>
</div>
```

### App Bar

```sh
<div class="primary-app-bar-container background-color-primary">
  <div class="primary-app-bar-content-container">
    <div class="primary-app-bar-left-container">
      <div class="primary-app-bar-left-content-container">
        <div class="bar-container" id="showSideBarComponent" title="Menu">
          <div class="bar background-color-white"></div>
          <div class="bar background-color-white"></div>
          <div class="bar background-color-white"></div>
        </div>
      </div>
      <div class="app-bar-title color-white">Home</div>
    </div>
    <div class="primary-app-bar-right-container">
      <div class="primary-app-bar-right-content-container" id="showDropdownMenuComponent" title="Dropdown">
        <i class="fa-solid fa-ellipsis-v app-bar-icon color-white"></i>
      </div>
    </div>
  </div>
</div>

------------------------------------------------------------------

<div class="secondary-app-bar-container background-color-primary">
  <div class="secondary-app-bar-content-container">
    <div class="secondary-app-bar-left-container">
      <div class="secondary-app-bar-left-content-container">
        <div class="bar-container" id="showSideBarComponent" title="Menu">
          <div class="bar background-color-white"></div>
          <div class="bar background-color-white"></div>
          <div class="bar background-color-white"></div>
        </div>
      </div>
      <div class="app-bar-title color-white">Home</div>
    </div>
    <div class="secondary-app-bar-right-container">
      <div class="secondary-app-bar-right-content-container penultimate" id="showSearchComponent" title="Search">
        <i class="fa-solid fa-search app-bar-icon color-white"></i>
      </div>
      <div class="secondary-app-bar-right-content-container" id="showDropdownMenuComponent" title="Dropdown">
        <i class="fa-solid fa-ellipsis-v app-bar-icon color-white"></i>
      </div>
    </div>
  </div>
</div> 

------------------------------------------------------------------

<div class="tertiary-app-bar-container background-color-primary">
  <div class="tertiary-app-bar-content-container">
    <div class="tertiary-app-bar-left-container">
      <div class="tertiary-app-bar-left-content-container">
        <div class="bar-container" id="showSideBarComponent" title="Menu">
          <div class="bar background-color-white"></div>
          <div class="bar background-color-white"></div>
          <div class="bar background-color-white"></div>
        </div>
      </div>
      <div class="app-bar-title color-white">Home</div>
    </div>
    <div class="tertiary-app-bar-right-container">
      <div class="tertiary-app-bar-right-content-container" id="showDropdownMenuComponent" title="Account">
        <img class="tertiary-app-bar-right-content-image" src="https://firebasestorage.googleapis.com/v0/b/lonica.appspot.com/o/img%2Ffounder.webp?alt=media&token=12adc7a0-76a4-4cf1-980f-38d3afd61ff4" alt="profile-photo">
      </div>
    </div>
  </div>
</div>

------------------------------------------------------------------

<div class="quaternary-app-bar-container background-color-primary">
  <div class="quaternary-app-bar-content-container">
    <div class="quaternary-app-bar-left-container">
      <div class="quaternary-app-bar-left-content-container">
        <div class="bar-container" id="showSideBarComponent" title="Menu">
          <div class="bar background-color-white"></div>
          <div class="bar background-color-white"></div>
          <div class="bar background-color-white"></div>
        </div>
      </div>
      <div class="app-bar-title color-white">Home</div>
    </div>
    <div class="quaternary-app-bar-right-container">
      <div class="quaternary-app-bar-right-content-container penultimate" id="showSearchComponent" title="Search">
        <i class="fa fa-search app-bar-icon color-white"></i>
      </div>
      <div class="quaternary-app-bar-right-content-container" id="showDropdownMenuComponent" title="Dropdown">
        <i class="fa fa-ellipsis-v app-bar-icon color-white"></i>
      </div>
    </div>
  </div>
  <div class="quaternary-app-bar-tab-container">
    <div class="quaternary-app-bar-tab-content-container">
      <div class="quaternary-app-bar-tab-content color-white font-size-small cursor-pointer">
        <div class="quaternary-app-bar-tab">
          <i class="fa fa-compass app-bar-icon"></i>
          EXPLORE
        </div>
        <div class="quaternary-app-bar-tab-content-horizontal-line background-color-white"></div>
      </div>
      <div class="quaternary-app-bar-tab-content color-disabled font-size-small cursor-pointer">
        <div class="quaternary-app-bar-tab">
          <i class="fa fa-map app-bar-icon"></i>
          TRIPS
        </div>
        <div class="quaternary-app-bar-tab-content-horizontal-line background-color-transparent"></div>
      </div>
    </div>
  </div>
</div>
```

### Side Bar

```sh
<div class="primary-side-bar-overlay background-color-overlay" id="primarySideBarOverlay"></div>
<div class="primary-side-bar-container background-color-white" id="primarySideBarContainer">
  <div class="primary-side-bar-content-container">

  </div>
</div>

------------------------------------------------------------------

<div class="secondary-side-bar-container w-4-point-5-rem h-100-vh background-color-white box-shadow-primary">
  <div class="secondary-side-bar-content-container center-absolute display-grid place-content-center row-gap-3-rem">
    <i class="fa-solid fa-home color-primary font-size-larger cursor-pointer" title="Home"></i>
    <i class="fa-regular fa-comment-alt color-toast font-size-larger cursor-pointer" title="Chat"></i>
    <i class="fa-regular fa-user color-toast font-size-larger cursor-pointer" title="Profile"></i>
    <i class="fa-solid fa-share-alt color-toast font-size-larger cursor-pointer" title="Share"></i>
  </div>
</div>
```

## Floating Action Button

```sh
<div class="primary-floating-action-button background-color-primary" id="showBottomSheetDialogComponent">
  <i class="fa-solid fa-plus primary-floating-action-button-icon color-white"></i>
</div>

------------------------------------------------------------------

<div class="secondary-floating-action-button background-color-primary" id="showBottomSheetDialogComponent">
  <i class="fa-solid fa-plus secondary-floating-action-button-icon color-white"></i>
  <div class="secondary-floating-action-button-text-title color-white">Compose</div>
</div>
```

## Bottom Navigation Bar

```sh
<div class="primary-bottom-navigation-bar-container background-color-white">
  <div class="primary-bottom-navigation-bar-content-container">
    <div class="primary-bottom-navigation-bar-content">
      <i class="fa-solid fa-home primary-bottom-navigation-bar-icon color-primary"></i>
      <div class="primary-bottom-navigation-bar-text-title color-primary">Home</div>
    </div>
    <div class="primary-bottom-navigation-bar-content">
      <i class="fa-solid fa-heart primary-bottom-navigation-bar-icon color-black"></i>
      <div class="primary-bottom-navigation-bar-text-title color-black">Favorites</div>
    </div>
    <div class="primary-bottom-navigation-bar-content" title="FAB">
      <div class="primary-bottom-navigation-floating-action-button background-color-primary" id="showBottomSheetDialogComponent">
        <i class="fa-solid fa-plus primary-floating-action-button-icon"></i>
      </div>
    </div>
    <div class="primary-bottom-navigation-bar-content">
      <i class="fa-solid fa-cart-shopping primary-bottom-navigation-bar-icon color-black"></i>
      <div class="primary-bottom-navigation-bar-text-title color-black">Cart</div>
    </div>
    <div class="primary-bottom-navigation-bar-content">
      <i class="fa-solid fa-user primary-bottom-navigation-bar-icon color-black"></i>
      <div class="primary-bottom-navigation-bar-text-title color-black">Account</div>
    </div>
  </div>
</div>      
```

## Drop Down Menu

```sh
<div class="primary-drop-down-menu-overlay" id="primaryDropDownMenuOverlay"></div>
<div class="primary-drop-down-menu-container background-color-white" id="primaryDropDownMenuContainer">
  <div class="primary-drop-down-menu-content-container">
    <i class="fa-solid fa-newspaper primary-drop-down-menu-icon color-black"></i>
    <p class="primary-drop-down-menu-icon-text color-black">Documentation</p>
  </div>
  <div class="primary-drop-down-menu-content-container">
    <i class="fa-solid fa-pager primary-drop-down-menu-icon color-black"></i>
    <p class="primary-drop-down-menu-icon-text color-black">Blog</p>
  </div>
  <div class="primary-drop-down-menu-content-container">
    <i class="fa-solid fa-phone primary-drop-down-menu-icon color-black"></i>
    <p class="primary-drop-down-menu-icon-text color-black">Contact</p>
  </div>
</div> 
```

## Alert Dialog

```sh
<div class="primary-alert-dialog-overlay" id="primaryAlertDialogOverlay"></div>
<div class="primary-alert-dialog-container" id="primaryAlertDialogContainer">
  <div class="primary-alert-dialog-content-container">
    <div class="primary-alert-dialog-text-title">Delete Account?</div>
    <div class="primary-alert-dialog-text-description">
      This will delete your account permanently.
    </div>
    <div class="primary-alert-dialog-action-container">
      <div class="primary-alert-dialog-action" id="hideAlertDialog">Cancel</div>
      <div class="primary-alert-dialog-action color-danger">Delete</div>
    </div>
  </div>
</div>
```

## Bottom Sheet Dialog

```sh
<div class="primary-bottom-sheet-dialog-overlay" id="primaryBottomSheetDialogOverlay"></div>
<div class="primary-bottom-sheet-dialog-container" id="primaryBottomSheetDialogContainer">
  <div class="primary-bottom-sheet-dialog-content-container">
    <div class="primary-bottom-sheet-dialog-content"><i class="fa-solid fa-share primary-bottom-sheet-dialog-content-icon"></i> Share</div>
    <div class="primary-bottom-sheet-dialog-content"><i class="fa-solid fa-link primary-bottom-sheet-dialog-content-icon"></i> Get link</div>
    <div class="primary-bottom-sheet-dialog-content"><i class="fa-solid fa-pencil primary-bottom-sheet-dialog-content-icon"></i> Edit</div>
    <div class="primary-bottom-sheet-dialog-content"><i class="fa-solid fa-trash primary-bottom-sheet-dialog-content-icon"></i> Delete</div>
  </div>
</div>

------------------------------------------------------------------

<div class="secondary-bottom-sheet-dialog-overlay" id="secondaryBottomSheetDialogOverlay"></div>
<div class="secondary-bottom-sheet-dialog-container" id="secondaryBottomSheetDialogContainer">
  <div class="secondary-bottom-sheet-dialog-content-container">
    <div class="secondary-bottom-sheet-dialog-title">Options</div>
      <div class="secondary-bottom-sheet-dialog-content"><i class="fa-solid fa-share secondary-bottom-sheet-dialog-content-icon"></i> Share</div>
      <div class="secondary-bottom-sheet-dialog-content"><i class="fa-solid fa-link secondary-bottom-sheet-dialog-content-icon"></i> Get link</div>
      <div class="secondary-bottom-sheet-dialog-content"><i class="fa-solid fa-pencil secondary-bottom-sheet-dialog-content-icon"></i> Edit</div>
    <div class="secondary-bottom-sheet-dialog-content"><i class="fa-solid fa-trash secondary-bottom-sheet-dialog-content-icon"></i> Delete</div>
  </div>
</div>
```

## Toast

```sh
<div class="primary-toast-container background-color-toast" id="primaryToastContainer">
  <div class="primary-toast-content-container">
    <div class="primary-toast-content color-white">
      <i class="fa-solid fa-circle-exclamation primary-toast-icon color-white"></i> File was uploaded
    </div>
  </div>
</div>

------------------------------------------------------------------

<div class="secondary-toast-container background-color-toast" id="secondaryToastContainer">
  <div class="secondary-toast-content-container">
    <div class="secondary-toast-content color-white">
      <i class="fa-solid fa-circle-exclamation secondary-toast-icon color-white"></i> File was uploaded
    </div>
  </div>
</div>
```

## Card

```sh
<div class="primary-card-container">
  <div class="primary-card-content-container">
    <div class="primary-card-content background-color-white">
      <img class="primary-card-image" src="https://source.unsplash.com/random" alt="random-image"/>
      <div class="primary-card-title color-black font-size-medium color-black">Top 10 Best Photos</div>
      <div class="primary-card-description color-toast font-size-medium">
        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </div>
    </div>
    <div class="primary-card-content background-color-white">
      <img class="primary-card-image" src="https://source.unsplash.com/featured" alt="random-image"/>
      <div class="primary-card-title color-black font-size-medium color-black">Top 10 Best Photos</div>
      <div class="primary-card-description color-toast font-size-medium">
        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </div>
    </div>
    <div class="primary-card-content background-color-white">
      <img class="primary-card-image" src="https://source.unsplash.com/featured/colors" alt="random-image"/>
      <div class="primary-card-title color-black font-size-medium color-black">Top 10 Best Photos</div>
      <div class="primary-card-description color-toast font-size-medium">
        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </div>
    </div>
    <div class="primary-card-content background-color-white">
      <img class="primary-card-image" src="https://source.unsplash.com/featured/clouds" alt="random-image"/>
      <div class="primary-card-title color-black font-size-medium color-black">Top 10 Best Photos</div>
      <div class="primary-card-description color-toast font-size-medium">
        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </div>
    </div>
    <div class="primary-card-content background-color-white">
      <img class="primary-card-image" src="https://source.unsplash.com/random/picture" alt="random-image"/>
      <div class="primary-card-title color-black font-size-medium color-black">Top 10 Best Photos</div>
      <div class="primary-card-description color-toast font-size-medium">
        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </div>
    </div>
  </div>
</div>
            
------------------------------------------------------------------

<div class="secondary-card-container w-22-rem h-fit-content background-color-white">
  <div class="secondary-card-content-container">
    <div class="secondary-card-top-container">
      <div class="secondary-card-top-image-container">
        <img class="secondary-card-top-image background-color-skeleton" src="https://firebasestorage.googleapis.com/v0/b/lonica.appspot.com/o/img%2Ffounder.webp?alt=media&token=12adc7a0-76a4-4cf1-980f-38d3afd61ff4" alt="profile-photo">
      </div>
      <div class="secondary-card-top-text-icon-container">
        <div class="secondary-card-top-text-container">
          <div class="secondary-card-top-text-title color-black font-size-medium font-weight-600">Lonica CSS Framework</div>
          <div class="secondary-card-top-text-description color-tost font-size-smaller">January 12, 2023</div>
        </div>
        <div class="secondary-card-top-icon-container" title="Option">
          <i class="fa-solid fa-ellipsis secondary-card-icon color-black"></i>
        </div>
      </div>
    </div>
    <div class="secondary-card-bottom-container">
      <img class="secondary-card-bottom-image h-12-rem" src="https://source.unsplash.com/random/portrait" alt="random-image"/>
      <div class="secondary-card-bottom-description color-toast font-size-medium">ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</div>
      <div class="secondary-card-bottom-text-icon-container">
        <div class="secondary-card-bottom-icon-container">
          <i class="fa-solid fa-heart secondary-card-icon color-love" title="Heart Post"></i>
          <i class="fa-solid fa-thumbs-up secondary-card-icon color-toast" title="Like Post"></i>
          <i class="fa-solid fa-share secondary-card-icon color-toast" title="Share Post"></i>
        </div>
        <div class="secondary-card-bottom-text-container color-enterprise-black font-size-medium"><i class="fa-solid fa-comment-dots secondary-card-icon color-toast" title="Comment"></i></div>
      </div>
    </div>
  </div>
</div>

------------------------------------------------------------------

<div class="tertiary-card-container">
  <div class="tertiary-card-content-container">
    <div class="tertiary-card-content background-color-white">
      <img class="tertiary-card-image" src="https://source.unsplash.com/random" alt="random-image"/>
      <div class="tertiary-card-title color-black font-size-medium color-black">Top 10 Best Photos</div>
      <div class="tertiary-card-description color-toast font-size-medium">
        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </div>
      <div class="tertiary-card-content-bottom-container">
        <div class="tertiary-card-content-bottom-text font-size-small font-weight-700 color-primary">Explore</div>
        <div class="tertiary-card-content-bottom-text font-size-small font-weight-700 color-primary">Share</div>
      </div>
    </div>
    <div class="tertiary-card-content background-color-white">
      <img class="tertiary-card-image" src="https://source.unsplash.com/random/people" alt="random-image"/>
      <div class="tertiary-card-title color-black font-size-medium color-black">Top 10 Best Photos</div>
      <div class="tertiary-card-description color-toast font-size-medium">
        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </div>
      <div class="tertiary-card-content-bottom-container">
        <div class="tertiary-card-content-bottom-text font-size-small font-weight-700 color-primary">Explore</div>
        <div class="tertiary-card-content-bottom-text font-size-small font-weight-700 color-primary">Share</div>
      </div>
    </div>
    <div class="tertiary-card-content background-color-white">
      <img class="tertiary-card-image" src="https://source.unsplash.com/random/clouds" alt="random-image"/>
      <div class="tertiary-card-title color-black font-size-medium color-black">Top 10 Best Photos</div>
      <div class="tertiary-card-description color-toast font-size-medium">
        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </div>
      <div class="tertiary-card-content-bottom-container">
        <div class="tertiary-card-content-bottom-text font-size-small font-weight-700 color-primary">Explore</div>
        <div class="tertiary-card-content-bottom-text font-size-small font-weight-700 color-primary">Share</div>
      </div>
    </div>
    <div class="tertiary-card-content background-color-white">
      <img class="tertiary-card-image" src="https://source.unsplash.com/random/colors" alt="random-image"/>
      <div class="tertiary-card-title color-black font-size-medium color-black">Top 10 Best Photos</div>
      <div class="tertiary-card-description color-toast font-size-medium">
        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </div>
      <div class="tertiary-card-content-bottom-container">
        <div class="tertiary-card-content-bottom-text font-size-small font-weight-700 color-primary">Explore</div>
        <div class="tertiary-card-content-bottom-text font-size-small font-weight-700 color-primary">Share</div>
      </div>
    </div>
    <div class="tertiary-card-content background-color-white">
      <img class="tertiary-card-image" src="https://source.unsplash.com/random/woman" alt="random-image"/>
      <div class="tertiary-card-title color-black font-size-medium color-black">Top 10 Best Photos</div>
      <div class="tertiary-card-description color-toast font-size-medium">
        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </div>
      <div class="tertiary-card-content-bottom-container">
        <div class="tertiary-card-content-bottom-text font-size-small font-weight-700 color-primary">Explore</div>
        <div class="tertiary-card-content-bottom-text font-size-small font-weight-700 color-primary">Share</div>
      </div>
    </div>
  </div>
</div>
```

## Form 

```sh
<div class="secondary-input-container center-absolute w-fit-content h-fit-content background-color-white border-radius-secondary">
  <div class="secondary-input-title font-size-massive color-primary margin-bottom-1-rem text-align-center font-weight-bold">Register</div>
  <div class="secondary-input-description font-size-medium color-toast margin-bottom-3-rem text-align-center w-19-point-5-rem">Your future friends are waiting for you to join. Create Account Now!</div>
  <form class="w-100-pct h-100-pct display-grid place-content-center" action="#" method="post">
    <div class="secondary-input-content-container margin-bottom-1-rem w-19-point-5-rem border-primary border-radius-secondary">
      <input class="secondary-input" type="text" placeholder=" " autocomplete="off"/>
      <label>Email</label>
      <i class="fa-solid fa-envelope secondary-input-icon color-primary"></i>
    </div>
    <div class="secondary-input-content-container margin-bottom-1-rem w-19-point-5-rem border-primary border-radius-secondary">
      <input class="secondary-input" type="text" placeholder=" " autocomplete="off"/>
      <label>Username</label>
      <i class="fa-solid fa-user secondary-input-icon color-primary"></i>
    </div>
    <div class="secondary-input-content-container margin-bottom-1-rem w-19-point-5-rem border-primary border-radius-secondary">
      <input class="secondary-input" type="password" placeholder=" " autocomplete="off"/>
      <label>Password</label>
      <i class="fa-solid fa-lock secondary-input-icon color-primary"></i>
    </div>
    <div class="primary-checkbox-container margin-bottom-2-rem">
      <input class="primary-checkbox" type="checkbox" required>
      <div class="primary-checkbox-description color-toast font-size-small">I agree to the <a class="font-size-small color-primary" href="https://lonica.com/privacy-policy" target="-blank">Privacy Policy</a>.</div>
    </div>
    <button class="primary-button background-color-primary font-size-medium color-white border-radius-secondary">
      Register <i class="fa-solid fa-arrow-right primary-button-icon color-white"></i>
    </button>
  </form>
</div>
```

## Stepper

```sh
<div class="primary-stepper-container">
  <div class="primary-steppper-content-container">
    <div class="primary-steppper-content">
      <div class="primary-stepper-circle w-3-rem h-3-rem background-color-primary border-radius-senary color-white font-size-large font-weight-bold display-grid place-content-center">
        <i class="fa-solid fa-check color-white font-size-large"></i>
      </div>
      <div class="primary-stepper-text-container">
        <div class="primary-stepper-title font-size-medium font-weight-bold">Order Placed</div>
        <div class="primary-stepper-description color-toast font-size-medium">Your order has been placed</div>
      </div>
    </div>
    <div class="primary-steppper-content">
      <div class="primary-stepper-circle w-3-rem h-3-rem background-color-disabled border-radius-senary color-white font-size-large font-weight-bold display-grid place-content-center">
        2 
      </div>
      <div class="primary-stepper-text-container">
        <div class="primary-stepper-title font-size-medium font-weight-bold">Preparing</div>
        <div class="primary-stepper-description color-toast font-size-medium">Your order is being prepared</div>
      </div>
    </div>
    <div class="primary-steppper-content">
      <div class="primary-stepper-circle w-3-rem h-3-rem background-color-disabled border-radius-senary color-white font-size-large font-weight-bold display-grid place-content-center">
        3 
      </div>
      <div class="primary-stepper-text-container">
        <div class="primary-stepper-title font-size-medium font-weight-bold">On the way</div>
        <div class="primary-stepper-description color-toast font-size-medium">Your order is being shipped</div>
      </div>
    </div>
    <div class="primary-steppper-content">
      <div class="primary-stepper-circle w-3-rem h-3-rem background-color-disabled border-radius-senary color-white font-size-large font-weight-bold display-grid place-content-center">
        4 
      </div>
      <div class="primary-stepper-text-container">
        <div class="primary-stepper-title font-size-medium font-weight-bold">Delivered</div>
        <div class="primary-stepper-description color-toast font-size-medium">Your order was delivered successfully</div>
      </div>
    </div>
  </div>
</div>
```

## Input 

```sh
<div class="primary-input-container display-grid place-content-center">
  <div class="primary-input-content-container">
    <i class="fa-solid fa-envelope primary-input-icon color-primary"></i>
    <input type="email" class="primary-input background-color-white color-black font-size-medium" placeholder="Email" autocomplete="off">
  </div>
  <hr class="primary-input-line border-color-primary">
</div>

------------------------------------------------------------------

<div class="secondary-input-content-container margin-bottom-1-rem w-19-point-5-rem border-primary border-radius-secondary">
  <input class="secondary-input" type="password" placeholder=" " autocomplete="off"/>
  <label>Password</label>
  <i class="fa-solid fa-lock secondary-input-icon color-primary"></i>
</div>
```

## Search

```sh
<div class="primary-search-overlay" id="primarySearchOverlay"></div>
<div class="primary-search-container background-color-white" id="primarySearchContainer">
  <form class="primary-search-content-container" method="get">
    <i class="fa-solid fa-arrow-left primary-search-icon color-black" id="hideSearch" title="Back"></i>
    <input class="primary-search-input w-100-pct background-color-white font-size-medium color-black border-none" type="text" placeholder="Search here...">
    <button class="primary-search-button" type="submit"><i class="fa-solid fa-search primary-search-icon color-black" title="Search"></i></button>
  </form>
</div>
```

## Checkbox

```sh
<div class="primary-checkbox-container">
  <input class="primary-checkbox" type="checkbox">
  <div class="primary-checkbox-description color-black font-size-small">I agree to the <a class="font-size-small color-primary" href="https://lonica.com/privacy-policy" target="-blank">Privacy Policy</a>.</div>
</div>
```

## Button 

```sh
<button class="primary-button background-color-primary font-size-medium color-white border-radius-secondary display-flex column-gap-1-rem">
  Login <i class="fa-solid fa-sign-in primary-button-icon color-white"></i>
</button>

------------------------------------------------------------------

<button class="secondary-button background-color-primary border-radius-senary display-flex column-gap-1-rem">
  Login <i class="fa-solid fa-sign-in secondary-button-icon"></i>
</button>
```

## Onboarding Screen

```sh
<div class="primary-onboarding-screen-container" id="firstOnboardingScreen">
  <div class="primary-onboarding-screen-content-container">
    <div class="primary-onboarding-screen-top-content-container text-align-center">
      <img class="primary-onboarding-screen-image w-11-rem margin-bottom-1-rem" src="https://firebasestorage.googleapis.com/v0/b/lonica.appspot.com/o/svg%2Fbadge.svg?alt=media&token=30a5229e-fcc8-46fa-ae2c-9339e5443df9" alt="badge">
      <div class="primary-onboarding-screen-title font-size-large font-weight-bold margin-bottom-1-rem text-align-center">Trusted Worldwide</div>
      <div class="primary-onboarding-screen-desc font-size-medium text-align-center">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, velit?</div>
    </div>
    <div class="primary-onboarding-screen-bottom-content-container w-100-pct display-grid place-content-center text-align-center">
      <button class="primary-onboarding-screen-button w-17-point-5-rem margin-bottom-1-rem" id="firstOnboardingScreenButton">Next</button>
      <button class="primary-onboarding-third-screen-button w-17-point-5-rem background-color-skeleton box-shadow-none color-black" id="firstOnboardingScreenSkipButton">Skip</button>
    </div>
  </div>
</div>
<div class="primary-onboarding-second-screen-overlay" id="primaryOnboardingSecondScreenOverlay"></div>
<div class="primary-onboarding-second-screen-container" id="secondOnboardingScreen">
  <div class="primary-onboarding-second-screen-content-container">
    <div class="primary-onboarding-second-screen-top-content-container text-align-center">
      <img class="primary-onboarding-second-screen-image w-11-rem margin-bottom-1-rem" src="https://firebasestorage.googleapis.com/v0/b/lonica.appspot.com/o/svg%2Fbag.svg?alt=media&token=4491e00b-00e0-4d9f-8031-9f83a741d8fc" alt="bag">
      <div class="primary-onboarding-second-screen-title font-size-large font-weight-bold margin-bottom-1-rem text-align-center">Shop with Confident</div>
      <div class="primary-onboarding-second-screen-desc font-size-medium text-align-center">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, velit?</div>
    </div>
    <div class="primary-onboarding-second-screen-bottom-content-container w-100-pct display-grid place-content-center text-align-center">
      <div class="primary-onboarding-second-screen-stepper-container">
        <div class="primary-onboarding-second-screen-stepper background-color-disabled"></div>
        <div class="primary-onboarding-second-screen-stepper background-color-primary"></div>
        <div class="primary-onboarding-second-screen-stepper background-color-disabled"></div>
      </div>
      <button class="primary-onboarding-second-screen-button w-17-point-5-rem" id="secondOnboardingScreenButton">Next</button>
    </div>
  </div>
</div>
<div class="primary-onboarding-third-screen-overlay" id="primaryOnboardingThirdScreenOverlay"></div>
<div class="primary-onboarding-third-screen-container" id="thirdOnboardingScreen">
  <div class="primary-onboarding-third-screen-content-container">
    <div class="primary-onboarding-third-screen-top-content-container text-align-center">
      <img class="primary-onboarding-third-screen-image w-11-rem margin-bottom-1-rem" src="https://firebasestorage.googleapis.com/v0/b/lonica.appspot.com/o/svg%2Fbar.svg?alt=media&token=c0f8822f-45b9-4576-bac7-1e6ceb47d09f" alt="bar">
      <div class="primary-onboarding-third-screen-title font-size-large font-weight-bold margin-bottom-1-rem text-align-center">Track Fast</div>
      <div class="primary-onboarding-third-screen-desc font-size-medium text-align-center">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, velit?</div>
    </div>
    <div class="primary-onboarding-third-screen-bottom-content-container w-100-pct display-grid place-content-center text-align-center">
      <div class="primary-onboarding-third-screen-stepper-container">
        <div class="primary-onboarding-third-screen-stepper background-color-disabled"></div>
        <div class="primary-onboarding-third-screen-stepper background-color-disabled"></div>
        <div class="primary-onboarding-third-screen-stepper background-color-primary"></div>
      </div>
      <button class="primary-onboarding-third-screen-button w-17-point-5-rem" id="thirdOnboardingScreenButton">Get Started</button>
    </div>
  </div>
</div>
```

## Table 

```sh
<div class="primary-table-container">
  <div class="primary-table-content-container">
    <table>
      <thead>
        <tr>
          <th>Country</th>
          <th>Nationality</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Philippines</td>
          <td>Filipino</td>
        </tr>
        <tr>
          <td>Korea</td>
          <td>Korean</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
```

### Lonica CSS Utilities

Use built-in utility classes to write custom CSS directly inside your markup.



## Width

```sh
Width in Percentage 1-100%

w-10-point-5-pct   =   { width: 10.5%; }
    
w-100-pct   =   { width: 100%; }

------------------------------------------------------------------

Width in Rem 1-100rem

w-10-point-5-rem   =   { width: 10.5rem; }
    
w-100-rem   =   { width: 100rem; }

------------------------------------------------------------------

Width in Viewport Width 1-100vw

w-10-point-5-vw   =   { width: 10.5vw; }
    
w-100-vw   =   { width: 100vw; }

------------------------------------------------------------------

Width Fit Content

w-fit-content   =   { width: fit-content; }

------------------------------------------------------------------

Width Auto

w-auto   =   { width: auto; }
```


## Height

```sh
Height in Percentage 1-100%

h-10-point-5-pct   =   { height: 10.5%; }
    
h-100-pct   =   { height: 100%; }

------------------------------------------------------------------

Height in Rem 1-100rem

h-10-point-5-rem   =   { height: 10.5rem; }
    
h-100-rem   =   { height: 100rem; }

------------------------------------------------------------------

Height in Viewport Height 1-100vh

w-10-point-5-vh   =   { height: 10.5vh; }
    
w-100-vh   =   { height: 100vh; }

------------------------------------------------------------------

Height Fit Content

h-fit-content   =   { height: fit-content; }

------------------------------------------------------------------

Height Auto

h-auto   =   { height: auto; }
```


## Margin

```sh
Margin in Rem 1-100rem

margin-auto   =   { margin: auto; }

------------------------------------------------------------------

margin-1-rem   =   { margin: 1rem; }

------------------------------------------------------------------

margin-top-1-rem   =   { margin-top: 1rem; }

------------------------------------------------------------------

margin-bottom-1-rem   =   { margin-bottom: 1rem; }

------------------------------------------------------------------

margin-left-1-rem   =   { margin-left: 1rem; }

------------------------------------------------------------------

margin-right-1-rem   =   { margin-right: 1rem; }
```


## Padding

```sh
Padding in Rem 1-100rem

padding-1-rem   =   { padding: 1rem; }

------------------------------------------------------------------

padding-top-1-rem   =   { padding-top: 1rem; }

------------------------------------------------------------------

padding-bottom-1-rem   =   { padding-bottom: 1rem; }

------------------------------------------------------------------

padding-left-1-rem   =   { padding-left: 1rem; }

------------------------------------------------------------------

padding-right-1-rem   =   { padding-right: 1rem; }
```


## Position

```sh
text-align-center   =   { text-align: center; }

------------------------------------------------------------------
  
text-align-center   =   { text-align: center; }
  
------------------------------------------------------------------
  
text-align-start   =   { text-align: start; }

------------------------------------------------------------------
  
text-align-end   =   { text-align: end; }
  
------------------------------------------------------------------
  
text-align-left   =   { text-align: left; }
  
------------------------------------------------------------------

text-align-right   =   { text-align: right; }
  
------------------------------------------------------------------

center-absolute   =   { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); }
  
------------------------------------------------------------------

center-fixed   =   { position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); }
  
------------------------------------------------------------------

position-absolute   =   { position: absolute; }
  
------------------------------------------------------------------

position-fixed   =   { position: fixed; }
  
------------------------------------------------------------------

position-relative   =   { position: relative; }
  
------------------------------------------------------------------

position-static   =   { position: static; }
  
------------------------------------------------------------------

position-sticky   =   { position: sticky; }
  
------------------------------------------------------------------

position-inherit   =   { position: inherit; }

------------------------------------------------------------------  

position-initial   =   { position: initial; }

------------------------------------------------------------------
  
position-unset   =   { position: unset; }

------------------------------------------------------------------
  
float-inline-end   =   { float: inline-end; }
  
------------------------------------------------------------------

float-inline-start   =   { float: inline-start; }

------------------------------------------------------------------
  
float-left   =   { float: left; }

------------------------------------------------------------------
  
float-right   =   { float: right; }

------------------------------------------------------------------
  
float-none   =   { float: none; }
```


## Flex

```sh
  
display-flex   =   { display: flex; }
  
------------------------------------------------------------------

align-items-center   =   { align-items: center; }
  
------------------------------------------------------------------

align-content-center   =   { align-content: center; }
  
------------------------------------------------------------------

justify-content-center   =   { justify-content: center; }
  
------------------------------------------------------------------

justify-content-start   =   { justify-content: start; }
  
------------------------------------------------------------------

justify-content-end   =   { justify-content: end; }
  
------------------------------------------------------------------

justify-content-left   =   { justify-content: left; }
  
------------------------------------------------------------------

justify-content-right   =   { justify-content: right; }
  
------------------------------------------------------------------

justify-content-space-around   =   { justify-content: space-around; }
  
------------------------------------------------------------------

justify-content-space-evenly   =   { justify-content: space-evenly; }
  
------------------------------------------------------------------

justify-content-space-between   =   { justify-content: space-between; }
  
------------------------------------------------------------------

flex-direction-column   =   { flex-direction: column; }
  
------------------------------------------------------------------

flex-direction-row   =   { flex-direction: row; }
  
------------------------------------------------------------------

flex-wrap-wrap   =   { flex-wrap: wrap }
  
------------------------------------------------------------------

flex-wrap-now-wrap   =   { flex-wrap: nowrap }
  
------------------------------------------------------------------

flex-wrap-reverse   =   { flex-wrap: wrap-reverse }
  
------------------------------------------------------------------

column-gap-1-rem   =   { column-gap: 1rem; }
  
------------------------------------------------------------------

row-gap-1-rem   =   { row-gap: 1rem; }
  
------------------------------------------------------------------

columns-1   =   { columns: 1; }
  
------------------------------------------------------------------

break-inside-avoid   =   { break-inside: avoid; }
  
------------------------------------------------------------------

display-flex   =   { display: flex; }
  
------------------------------------------------------------------

align-items-center   =   { align-items: center; }
  
------------------------------------------------------------------

align-content-center   =   { align-content: center; }
  
------------------------------------------------------------------

justify-content-center   =   { justify-content: center; }
  
------------------------------------------------------------------

justify-content-start   =   { justify-content: start; }
  
------------------------------------------------------------------

justify-content-end   =   { justify-content: end; }
  
------------------------------------------------------------------

justify-content-left   =   { justify-content: left; }
  
------------------------------------------------------------------

justify-content-right   =   { justify-content: right; }
  
------------------------------------------------------------------

justify-content-space-around   =   { justify-content: space-around; }

------------------------------------------------------------------

justify-content-space-evenly   =   { justify-content: space-evenly; }
  
------------------------------------------------------------------

justify-content-space-between   =   { justify-content: space-between; }
  
------------------------------------------------------------------

flex-direction-column   =   { flex-direction: column; }
  
------------------------------------------------------------------

flex-direction-row   =   { flex-direction: row; }
  
------------------------------------------------------------------

flex-wrap-wrap   =   { flex-wrap: wrap }
  
------------------------------------------------------------------

flex-wrap-now-wrap   =   { flex-wrap: nowrap }
  
------------------------------------------------------------------

flex-wrap-reverse   =   { flex-wrap: wrap-reverse }
  
------------------------------------------------------------------

column-gap-1-rem   =   { column-gap: 1rem; }
  
------------------------------------------------------------------

row-gap-1-rem   =   { row-gap: 1rem; }
  
------------------------------------------------------------------

columns-1   =   { columns: 1; }
  
------------------------------------------------------------------

break-inside-avoid   =   { break-inside: avoid; }
```


## Grid

```sh
  
display-grid   =   { display: grid; }
  
------------------------------------------------------------------

place-content-center   =   { place-content: center; }
  
------------------------------------------------------------------

place-items-center   =   { place-items: center; }
  
------------------------------------------------------------------

place-content-start   =   { place-content: start; }
  
------------------------------------------------------------------

place-content-end   =   { place-content: end; }
  
------------------------------------------------------------------

place-content-left   =   { place-content: left; }
  
------------------------------------------------------------------

place-content-right   =   { place-content: right; }
  
------------------------------------------------------------------

column-gap-1-rem   =   { column-gap: 1rem; }
  
------------------------------------------------------------------

row-gap-1-rem   =   { row-gap: 1rem; }
  
------------------------------------------------------------------

columns-1   =   { columns: 1; }
  
------------------------------------------------------------------

break-inside-avoid   =   { break-inside: avoid; }
  
------------------------------------------------------------------

display-grid   =   { display: grid; }
  
------------------------------------------------------------------

place-content-center   =   { place-content: center; }
  
------------------------------------------------------------------

place-items-center   =   { place-items: center; }
  
------------------------------------------------------------------ 

place-content-start   =   { place-content: start; }
  
------------------------------------------------------------------ 

place-content-end   =   { place-content: end; }
  
------------------------------------------------------------------  

place-content-left   =   { place-content: left; }
  
------------------------------------------------------------------

place-content-right   =   { place-content: right; }
  
------------------------------------------------------------------

grid-temp-col-primary   =   { grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); }
  
------------------------------------------------------------------ 

grid-temp-col-secondary   =   { grid-template-columns: 50% 50%; }
  
------------------------------------------------------------------

grid-temp-col-tertiary   =   { grid-template-columns: 33% 33% 33%; }

------------------------------------------------------------------

grid-temp-col-quaternary   =   { grid-template-columns: 25% 25% 25% 25%; }

------------------------------------------------------------------

grid-temp-col-quinary   =   { grid-template-columns: 20% 20% 20% 20% 20%; }
  
------------------------------------------------------------------

column-gap-1-rem   =   { column-gap: 1rem; }
  
------------------------------------------------------------------

row-gap-1-rem   =   { row-gap: 1rem; }
  
------------------------------------------------------------------

columns-1   =   { columns: 1; }
  
------------------------------------------------------------------

break-inside-avoid   =   { break-inside: avoid; }
```


## Font Size

```sh
font-size-super-small   =   { font-size: 10px; }

------------------------------------------------------------------

font-size-extra-small   =   { font-size: 12px; }

------------------------------------------------------------------

font-size-smaller   =   { font-size: 14px; }

------------------------------------------------------------------

font-size-small   =   { font-size: 15px; }

------------------------------------------------------------------

font-size-medium   =   { font-size: 16px; }

------------------------------------------------------------------

font-size-large   =   { font-size: 18px; }

------------------------------------------------------------------

font-size-larger   =   { font-size: 24px; }

------------------------------------------------------------------

font-size-extra-large   =   { font-size: 1.8rem; }

------------------------------------------------------------------

font-size-super-large   =   { font-size: 2.3rem; }

------------------------------------------------------------------

font-size-massive   =   { font-size: 3rem; }

------------------------------------------------------------------

font-size-super-massive   =   { font-size: 3.8rem; }

------------------------------------------------------------------

font-size-ton-618   =   { font-size: 4.5rem; }
```


## Font Weight

```sh
  
font-weight-bold   =   { font-weight: bold; }

------------------------------------------------------------------

font-weight-bolder   =   { font-weight: bolder; }

------------------------------------------------------------------

font-weight-lighter   =   { font-weight: lighter; }

------------------------------------------------------------------

font-weight-normal   =   { font-weight: normal; }

------------------------------------------------------------------

font-weight-100   =   { font-weight: 100; }

------------------------------------------------------------------

font-weight-200   =   { font-weight: 200; }

------------------------------------------------------------------

font-weight-300   =   { font-weight: 300; }

------------------------------------------------------------------

font-weight-400   =   { font-weight: 400; }

------------------------------------------------------------------

font-weight-500   =   { font-weight: 500; }

------------------------------------------------------------------

font-weight-600   =   { font-weight: 600; }

------------------------------------------------------------------

font-weight-700   =   { font-weight: 700; }

------------------------------------------------------------------

font-weight-800   =   { font-weight: 800; }

------------------------------------------------------------------

font-weight-900   =   { font-weight: 900; }
```


## Box Shadow

```sh
box-shadow-none   =   { box-shadow: none; }

------------------------------------------------------------------
box-shadow-primary   =   { box-shadow: var(--shadow-primary); }

------------------------------------------------------------------

box-shadow-secondary   =   { box-shadow: var(--shadow-secondary); }

------------------------------------------------------------------

box-shadow-tertiary   =   { box-shadow: var(--shadow-tertiary); }

------------------------------------------------------------------

box-shadow-quaternary   =   { box-shadow: var(--shadow-quaternary); }
```


## Border

```sh
border-none   =   { border: none; }

------------------------------------------------------------------

border-primary   =   { border: 1px solid var(--lightgray); }

------------------------------------------------------------------

border-secondary   =   { border: 2px solid var(--lightgray); }

------------------------------------------------------------------

border-tertiary   =   { border: 3px solid var(--lightgray); }
```


## Border Radius

```sh
border-radius-primary   =   { border-radius: 4px; }

------------------------------------------------------------------

border-radius-secondary   =   { border-radius: 6px; }

------------------------------------------------------------------

border-radius-tertiary   =   { border-radius: 8px; }

------------------------------------------------------------------

border-radius-quaternairy   =   { border-radius: 10px; }

------------------------------------------------------------------

border-radius-quinary   =   { border-radius: 15px; }

------------------------------------------------------------------

border-radius-senary   =   { border-radius: 100px; }

------------------------------------------------------------------

border-radius-septenary   =   { border-radius: 50%; }
```


## Text Color

```sh
color-primary   =   { color: var(--primary); }

------------------------------------------------------------------

color-danger   =   { color: var(--danger); }

------------------------------------------------------------------
color-warning   =   { color: var(--warning); }

------------------------------------------------------------------

color-info   =   { color: var(--info); }

------------------------------------------------------------------

color-successful   =   { color: var(--successful); }

------------------------------------------------------------------

color-amethyst   =   { color: var(--amethyst); }
```


## Background Color

```sh
background-color-primary   =   { background-color: var(--primary); }

------------------------------------------------------------------

background-color-danger   =   { background-color: var(--danger); }

------------------------------------------------------------------
background-color-warning   =   { background-color: var(--warning); }

------------------------------------------------------------------

background-color-info   =   { background-color: var(--info); }

------------------------------------------------------------------

background-color-successful   =   { background-color: var(--successful); }

------------------------------------------------------------------

background-color-amethyst   =   { background-color: var(--amethyst); }
```


<img src="https://firebasestorage.googleapis.com/v0/b/lonica.appspot.com/o/img%2Fcolor-1.png?alt=media&token=8bc028a2-7c25-471a-887b-fe1559df908e" style="max-width:100%;" width="970">
<img src="https://firebasestorage.googleapis.com/v0/b/lonica.appspot.com/o/img%2Fcolor-2.png?alt=media&token=e8830126-3b9a-4526-a00b-f659a20fa5e6" style="max-width:100%;" width="970">
<img src="https://firebasestorage.googleapis.com/v0/b/lonica.appspot.com/o/img%2Fcolor-3.png?alt=media&token=5d1adebf-d850-4434-920e-a14765f052c8" style="max-width:100%;" width="970">
<img src="https://firebasestorage.googleapis.com/v0/b/lonica.appspot.com/o/img%2Fcolor-4.png?alt=media&token=13203dc7-9920-4087-b8c6-7ba082843877" style="max-width:100%;" width="970">
<img src="https://firebasestorage.googleapis.com/v0/b/lonica.appspot.com/o/img%2Fcolor-5.png?alt=media&token=7e125221-d776-4e84-b165-0c3222f885e2" style="max-width:100%;" width="970">



## Licensing

Copyright holder Allen Charls Casul. Source Code is under [the MIT license](https://github.com/allencasul/lonica/blob/main/LICENSE).



