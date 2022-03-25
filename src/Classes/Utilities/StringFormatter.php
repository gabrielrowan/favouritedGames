<?php

namespace GabrielApp\Classes\Utilities;

class StringFormatter {
    public static function formatIdsForSql(array $ids) {
    if(!count($ids)) {
    throw new \Exception("No ids provided");
    }

    $result = '';
    foreach ($ids as $id) {
    $result .= '`id`=' . $id . ' OR ';
    }
    return rtrim($result, 'OR ');
    }
}

