<!-- Template styles -->
<style>
    /* TEMPLATE STYLES */

    .flex-center {
        color: #fff;
    }

    .intro-1 {
        background: url("img/59.jpg")no-repeat center center;
        background-size: cover;
    }

    .navbar .btn-group .dropdown-menu a:hover {
        color: #000 !important;
    }

    .navbar .btn-group .dropdown-menu a:active {
        color: #fff !important;
    }
    @media only screen and (max-width: 667px) {
        .display-3 {
            font-size: 3rem;
        }
    }
    @media only screen and (max-width: 767px) {
        .navbar {
            background-color: #1C2331;
        }
        .display-3 {
            font-size: 2rem;
            margin-top: 5rem;
        }
        h3 {
            font-size: 1rem;
        }
    }


    /* Required for full background image */

html,
body,
header,
.view {
  height: 100%;
}

@media (max-width: 740px) {
  html,
  body,
  header,
  .view {
    height: 1000px;
  }
}
@media (min-width: 800px) and (max-width: 850px) {
  html,
  body,
  header,
  .view {
    height: 600px;
  }
}

.btn .fa {
  margin-left: 3px;
}

.top-nav-collapse {
  background-color: #424f95 !important;
}

.navbar:not(.top-nav-collapse) {
  /* background: transparent !important; */
}

@media (max-width: 991px) {
  .navbar:not(.top-nav-collapse) {
    background: #424f95 !important;
  }
}

.btn-white {
  color: black !important;
}

h6 {
  line-height: 1.7;
}

.rgba-gradient {
  background: -moz-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
  background: -webkit-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
  background: -webkit-gradient(linear, 45deg, from(rgba(42, 27, 161, 0.7)), to(rgba(29, 210, 177, 0.7)));
  background: -o-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
  background: linear-gradient(to 45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
}
</style>