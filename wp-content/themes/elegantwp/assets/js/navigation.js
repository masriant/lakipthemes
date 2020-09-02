/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
    var elegantwp_secondary_container, elegantwp_secondary_button, elegantwp_secondary_menu, elegantwp_secondary_links, elegantwp_secondary_i, elegantwp_secondary_len;

    elegantwp_secondary_container = document.getElementById( 'elegantwp-secondary-navigation' );
    if ( ! elegantwp_secondary_container ) {
        return;
    }

    elegantwp_secondary_button = elegantwp_secondary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof elegantwp_secondary_button ) {
        return;
    }

    elegantwp_secondary_menu = elegantwp_secondary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof elegantwp_secondary_menu ) {
        elegantwp_secondary_button.style.display = 'none';
        return;
    }

    elegantwp_secondary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === elegantwp_secondary_menu.className.indexOf( 'nav-menu' ) ) {
        elegantwp_secondary_menu.className += ' nav-menu';
    }

    elegantwp_secondary_button.onclick = function() {
        if ( -1 !== elegantwp_secondary_container.className.indexOf( 'elegantwp-toggled' ) ) {
            elegantwp_secondary_container.className = elegantwp_secondary_container.className.replace( ' elegantwp-toggled', '' );
            elegantwp_secondary_button.setAttribute( 'aria-expanded', 'false' );
            elegantwp_secondary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            elegantwp_secondary_container.className += ' elegantwp-toggled';
            elegantwp_secondary_button.setAttribute( 'aria-expanded', 'true' );
            elegantwp_secondary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    elegantwp_secondary_links    = elegantwp_secondary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( elegantwp_secondary_i = 0, elegantwp_secondary_len = elegantwp_secondary_links.length; elegantwp_secondary_i < elegantwp_secondary_len; elegantwp_secondary_i++ ) {
        elegantwp_secondary_links[elegantwp_secondary_i].addEventListener( 'focus', elegantwp_secondary_toggleFocus, true );
        elegantwp_secondary_links[elegantwp_secondary_i].addEventListener( 'blur', elegantwp_secondary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function elegantwp_secondary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'elegantwp-focus' ) ) {
                    self.className = self.className.replace( ' elegantwp-focus', '' );
                } else {
                    self.className += ' elegantwp-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( elegantwp_secondary_container ) {
        var touchStartFn, elegantwp_secondary_i,
            parentLink = elegantwp_secondary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, elegantwp_secondary_i;

                if ( ! menuItem.classList.contains( 'elegantwp-focus' ) ) {
                    e.preventDefault();
                    for ( elegantwp_secondary_i = 0; elegantwp_secondary_i < menuItem.parentNode.children.length; ++elegantwp_secondary_i ) {
                        if ( menuItem === menuItem.parentNode.children[elegantwp_secondary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[elegantwp_secondary_i].classList.remove( 'elegantwp-focus' );
                    }
                    menuItem.classList.add( 'elegantwp-focus' );
                } else {
                    menuItem.classList.remove( 'elegantwp-focus' );
                }
            };

            for ( elegantwp_secondary_i = 0; elegantwp_secondary_i < parentLink.length; ++elegantwp_secondary_i ) {
                parentLink[elegantwp_secondary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( elegantwp_secondary_container ) );
} )();


( function() {
    var elegantwp_primary_container, elegantwp_primary_button, elegantwp_primary_menu, elegantwp_primary_links, elegantwp_primary_i, elegantwp_primary_len;

    elegantwp_primary_container = document.getElementById( 'elegantwp-primary-navigation' );
    if ( ! elegantwp_primary_container ) {
        return;
    }

    elegantwp_primary_button = elegantwp_primary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof elegantwp_primary_button ) {
        return;
    }

    elegantwp_primary_menu = elegantwp_primary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof elegantwp_primary_menu ) {
        elegantwp_primary_button.style.display = 'none';
        return;
    }

    elegantwp_primary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === elegantwp_primary_menu.className.indexOf( 'nav-menu' ) ) {
        elegantwp_primary_menu.className += ' nav-menu';
    }

    elegantwp_primary_button.onclick = function() {
        if ( -1 !== elegantwp_primary_container.className.indexOf( 'elegantwp-toggled' ) ) {
            elegantwp_primary_container.className = elegantwp_primary_container.className.replace( ' elegantwp-toggled', '' );
            elegantwp_primary_button.setAttribute( 'aria-expanded', 'false' );
            elegantwp_primary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            elegantwp_primary_container.className += ' elegantwp-toggled';
            elegantwp_primary_button.setAttribute( 'aria-expanded', 'true' );
            elegantwp_primary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    elegantwp_primary_links    = elegantwp_primary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( elegantwp_primary_i = 0, elegantwp_primary_len = elegantwp_primary_links.length; elegantwp_primary_i < elegantwp_primary_len; elegantwp_primary_i++ ) {
        elegantwp_primary_links[elegantwp_primary_i].addEventListener( 'focus', elegantwp_primary_toggleFocus, true );
        elegantwp_primary_links[elegantwp_primary_i].addEventListener( 'blur', elegantwp_primary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function elegantwp_primary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'elegantwp-focus' ) ) {
                    self.className = self.className.replace( ' elegantwp-focus', '' );
                } else {
                    self.className += ' elegantwp-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( elegantwp_primary_container ) {
        var touchStartFn, elegantwp_primary_i,
            parentLink = elegantwp_primary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, elegantwp_primary_i;

                if ( ! menuItem.classList.contains( 'elegantwp-focus' ) ) {
                    e.preventDefault();
                    for ( elegantwp_primary_i = 0; elegantwp_primary_i < menuItem.parentNode.children.length; ++elegantwp_primary_i ) {
                        if ( menuItem === menuItem.parentNode.children[elegantwp_primary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[elegantwp_primary_i].classList.remove( 'elegantwp-focus' );
                    }
                    menuItem.classList.add( 'elegantwp-focus' );
                } else {
                    menuItem.classList.remove( 'elegantwp-focus' );
                }
            };

            for ( elegantwp_primary_i = 0; elegantwp_primary_i < parentLink.length; ++elegantwp_primary_i ) {
                parentLink[elegantwp_primary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( elegantwp_primary_container ) );
} )();