<?php
class GlobalFunctions {
    public static function convertTime($msTime) {
        return floor($msTime / 60000) . ":" . floor(($msTime / 1000) % 60);
    }
}
