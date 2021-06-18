[{if $oViewConf->showTags($oView) && ( $oView->getTagCloudManager() || ( ( $oView->getTagCloudManager() || $oxcmp_user) && $oDetailsProduct ) )}]
    [{capture append="tabs"}]
        <a id="tags-tab" href="#tags" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="tags" aria-selected="false">
            [{oxmultilang ident="TAGS"}]
        </a>
    [{/capture}]
    [{capture append="tabsContent"}]
    <div id="tags" class="tab-pane[{if $blFirstTab}] active[{/if}]" role="tabpanel" aria-labelledby="tags-tab">
        [{oxid_include_dynamic file=$oViewConf->getModulePath('oetags','views/moga/tpl/page/details/inc/tags.tpl')}]
    </div>
    [{assign var="blFirstTab" value=false}]
    [{/capture}]
[{/if}]
