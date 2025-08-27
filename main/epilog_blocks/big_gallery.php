<?
use \Bitrix\Main\Localization\Loc;

$bTab = isset($tabCode) && $tabCode === 'big_gallery';
?>
<?//show gallery block?>
<?if($templateData['BIG_GALLERY'] || $arResult['GALLERY']):?>
    <?if($bTab):?>
        <?if(!isset($bShow_big_gallery)):?>
            <?$bShow_big_gallery = true;?>
        <?else:?>
            <div class="tab-pane <?=(!($iTab++) ? 'active' : '')?>" id="big_gallery">
                <?if($templateData['BIG_GALLERY']):?>
                    <?$APPLICATION->ShowViewContent('PRODUCT_BIG_GALLERY_INFO')?>
                <?else:?>
                    <?// Показываем основную галерею если BIG_GALLERY пуста?>
                    <?
                    $arAllGallery = $arResult['GALLERY'];
                    if($arAllGallery):
                        $arGallery = array_map(function($array){
                            return [
                                'src' => $array['BIG']['src'] ? $array['BIG']['src'] : $array['SRC'],
                                'preview' => $array['SMALL']['src'] ? $array['SMALL']['src'] : $array['SRC'],
                                'alt' => $array['ALT'],
                                'title' => $array['TITLE']
                            ];
                        }, $arAllGallery);
                        
                        echo TSolution\Functions::showGallery($arGallery, [
                            'CONTAINER_CLASS' => 'gallery-detail font_24',
                        ]);
                    endif;
                    ?>
                <?endif;?>
            </div>
        <?endif;?>
    <?else:?>
        <div class="detail-block ordered-block big_gallery">
            <h3 class="switcher-title"><?=$arParams["T_BIG_GALLERY"]?></h3>
            <?if($templateData['BIG_GALLERY']):?>
                <?$APPLICATION->ShowViewContent('PRODUCT_BIG_GALLERY_INFO')?>
            <?else:?>
                <?// Показываем основную галерею если BIG_GALLERY пуста?>
                <?
                $arAllGallery = $arResult['GALLERY'];
                if($arAllGallery):
                    $arGallery = array_map(function($array){
                        return [
                            'src' => $array['BIG']['src'] ? $array['BIG']['src'] : $array['SRC'],
                            'preview' => $array['SMALL']['src'] ? $array['SMALL']['src'] : $array['SRC'],
                            'alt' => $array['ALT'],
                            'title' => $array['TITLE']
                        ];
                    }, $arAllGallery);
                    
                    echo TSolution\Functions::showGallery($arGallery, [
                        'CONTAINER_CLASS' => 'gallery-detail font_24',
                    ]);
                endif;
                ?>
            <?endif;?>
        </div>
    <?endif;?>
    <?    
    TSolution\Extensions::init(['gallery']);
    ?>
<?endif;?>