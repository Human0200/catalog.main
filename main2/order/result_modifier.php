<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
//print_r($_GET["name"]);
$arResult["QUESTIONS"]["NEED_PRODUCT"]["VALUE"] = $_GET["name"];
$arResult["QUESTIONS"]["NEED_PRODUCT"]["STRUCTURE"][0]["VALUE"] = $_GET["name"];
