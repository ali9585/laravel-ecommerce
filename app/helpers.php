<?php

function error($field)
{
    return view('admin._partials.error', compact('field'));
}