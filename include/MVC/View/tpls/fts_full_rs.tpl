{*
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
*}

{if count($resultSet) > 0}
    {foreach from=$resultSet item=result name=searchresult}
        <section class="{if ($smarty.foreach.searchresult.index + $indexOffset) is even}even{else}odd{/if}">
            <div class="resultTitle">
            {$result->getModuleName()|upper}
            </div>
            {capture assign=url}index.php?module={$result->getModule()}&record={$result->getId()}&action=DetailView{/capture}
                <ul>
                    <li>
                        <a href="{$url}"> <span>{$result->getSummaryText()}</span></a>
                        <br>
                        <span class="details">
                                {assign var="resultHits" value=$result->getHighlightedHitText(1)}
                                {foreach from=$resultHits key=k item=v}
                                <p>
                                    {sugar_translate label=$v.label module=$v.module}: {$v.text}
                                    <br>
                                </p>
                                {/foreach}
                        </span>
                    </li>
                </ul>
            <div class="clear"></div>
        </section>
    {/foreach}
{else}
	<section class="resultNull" style="padding: 50px;">
        <h1>{$APP.LBL_EMAIL_SEARCH_NO_RESULTS}</h1>
   	</section>
{/if}
<br>