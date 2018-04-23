<template>
    <nav id="navbar" class="navbar navbar-expand-sm shadow-sm fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav  nav-fill w-100">
                <li v-for="route in $router.options.routes" class="nav-item" :class="route.color">
                    <router-link :to="route" class="nav-link" active-class="active" :data-target="route.path">
                        <i class="fas" :class="'fa-'+route.icon"></i> {{route.title}}
                    </router-link>
                </li>

            </ul>
        </div>
    </nav>

</template>
<style lang="scss">

    body {
        padding-top: 86px;
    }
</style>
<style lang="scss" scoped>
    $navbar-padding-y: 0;
    $navbar-padding-x: 0;
    @import "../../../sass/app";

    $_colors: cyan orange fuchsia purple greenyellow;
    // Basics of a navbar


    .navbar {
        &:hover {
            opacity: 1 !important;
        }
        min-height: 80px;
        /* background-color: rgba(173,247,152,1);
         background: linear-gradient(to right, rgba(173,247,152,1) 0%, rgba(117,227,208,1) 100%);
 */
        background: rgba(0, 201, 255, 1); /* fallback for old browsers */
        background: linear-gradient(to left, rgba(146, 254, 157, 1), rgba(0, 201, 255, 1)); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        &.shrink {
            opacity: 0.5;
            min-height: 35px;
            .navbar-brand {
                font-size: 25px;
            }
            a {
                font-size: 15px;
                padding-bottom: 10px !important;
                padding-top: 10px !important;
            }
            .navbar-toggle {
                margin: 8px 15px 8px 0;
                padding: 4px 5px;
            }
        }

        .navbar-toggle {
            /* (80px - button height 34px) / 2 = 23px */
            margin-top: 23px;
            padding: 9px 10px !important;
        }

        .navbar-nav > li > a {
            /* (80px - line-height of 27px) / 2 = 26.5px */
            padding-top: 26.5px;
            padding-bottom: 26.5px;
            line-height: 27px;

        }
        .nav-item {
            position: relative;
            .nav-link:after {
                position: absolute;
                content: '';
                width: 42%;
                height: 16px;
                border-right: 1px solid color("white");
                right: 0;
                top: 42%;
                margin-top: -2.5%;
            }
            @each $_color in $_colors {
                &.#{$_color} {
                    //border-top: 5px solid #{$_color};
                    & > .nav-link:hover, & .active {
                        background-color: #{$_color} !important;
                    }
                    & > .nav-link {
                        color: white;
                        font-family: "Lobster", sans-serif;
                        font-size: 1.5rem;
                        text-shadow: #000000 1px 1px 0px;

                    }
                }
            }

        }

        .active {
            font-weight: bolder !important;
        }
    }

</style>
<script>
    export default {
        mounted() {
            $(window).scroll(() => {
                if ($(document).scrollTop() > 50) {
                    $('.navbar').addClass('shrink');

                } else {
                    $('.navbar').removeClass('shrink');
                }
            });
        },
        methods: {}
    }
</script>