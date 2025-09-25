<?php

function foo(int $bar): never {
    exit();
}

foo(3);