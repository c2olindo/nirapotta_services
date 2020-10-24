<?php

function activeNavigation($menu) {
    Request::is('$menu') ? 'active' : '';
}