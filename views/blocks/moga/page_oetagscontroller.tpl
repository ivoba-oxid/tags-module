[{capture append="oxidBlock_content"}]
    [{assign var="template_title" value="TAGS"|oxmultilangassign}]
    [{assign var="topWidth" value=$oViewConf->getViewThemeParam('sTopWidth')}]
    [{if $oView->getTagCloudManager()}]
    <div class="container[{if $topWidth == 'w100cContainer'}]-xxl[{else}]-fluid[{/if}]">
        <h1>[{oxmultilang ident="TAGS"}]</h1>
        <p id="tagsCloud" class="pb-5">
            [{assign var="oTagsManager" value=$oView->getTagCloudManager()}]
            [{foreach from=$oTagsManager->getCloudArray() item="oTag" key=sTagTitle}]
            [{assign var="iTagSize" value=$oTagsManager->getTagSize($sTagTitle)}]
            [{assign var="sTagPriority" value="btn-default"}]
            [{if $iTagSize < 100}]
            [{assign var="sTagPriority" value="btn-primary"}]
            [{elseif $iTagSize < 200}]
            [{assign var="sTagPriority" value="btn-info"}]
            [{elseif $iTagSize < 300}]
            [{assign var="sTagPriority" value="btn-warning"}]
            [{elseif $iTagSize < 400}]
            [{assign var="sTagPriority" value="btn-danger"}]
            [{/if}]
            <a class="btn [{$sTagPriority}] tagitem_[{$oTagsManager->getTagSize($oTag->getTitle())}]" href="[{$oTag->getLink()}]">[{$oTag->getTitle()}]</a>
            [{/foreach}]
        </p>
    </div>
    [{/if}]
    [{insert name="oxid_tracker" title=$template_title}]
    [{/capture}]
[{include file="layout/page.tpl"}]
