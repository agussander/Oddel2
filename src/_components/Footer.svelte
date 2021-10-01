<script>
import { goto, page} from "@roxi/routify";

import { lang, t, langIsSet } from "../stores";
let selectedLanguage=$lang;

const changeLang = (l) =>{
    $langIsSet=true;
    if($lang!==l){
        l=='es' ? $goto('/es'+$page.path) : $goto($page.path.replace('/es',''))
    }
}


</script>



<footer>
    <div class="line"></div>
    <div class="cont">
        <span class="select-cont">
            <select name="lang" bind:value={selectedLanguage} on:change={()=>changeLang(selectedLanguage)} on:blur>={()=>changeLang(selectedLanguage)}>
                {#if $lang =='en'}
                <option value="en">English</option>
                <option value="es">Español</option>
                {:else}
                <option value="es">Español</option>
                <option value="en">English</option>
                {/if}
            </select>
            <div class="up-icon"></div>
        </span>
        <div class="links">
            <h5>{$t.footer.services.title}</h5>
            <a href={$t.links.web}>{$t.footer.services.p.p1}</a>
            <a href="{$t.links.media}">{$t.footer.services.p.p2}</a>
            <a href="{$t.links.com}">{$t.footer.services.p.p3}</a>
        </div>
        <div class="links">
            <h5>{$t.footer.others.title}</h5>
            <a href="{$t.links.contact}">{$t.footer.others.p.p1}</a>
        </div>
    </div>
    <div class="buttons">
        <a class="social ig" href="https://www.instagram.com/oddel.digitalmarketing/">@oddel.digitalmarketing</a>
        <a class="social fb" href="https://www.facebook.com/ODDEL-Marketing-Digital-106281481602490">ODDEL Marketing Digital</a>
        <a class="social in" href="https://ar.linkedin.com/company/oddel?trk=public_profile_experience-item_result-card_subtitle-click">Oddel</a>
    </div>
</footer>




<style>
.in{
    background:url('/images/icon-in-l.svg')
}
.fb{
    background:url('/images/incon-fb-l.svg')
}
.ig{
    background:url('/images/icon-ig-l.svg')
}
.line{
    width:95%;
    height: 1px;
    background: rgb(212, 212, 212);
    margin:0 auto 2em;
}
footer{
    padding:0 1em 4em;
    display: flex;
    flex-flow: column wrap;
    justify-content: space-evenly;
    padding:0 2em;
    max-width: 100%;
    overflow-x: hidden;
    background:white;
}
*{
    text-align: left;
}
select{
    appearance: none;
    background-color: transparent;
    border: none;
    margin: 0;
    padding-right: 1.2em;
    font-family: inherit;
    font-size: inherit;
    cursor: inherit;
    line-height: inherit;
    color:var(--text);
}
.up-icon{
    background: url('/images/icon-up.svg') no-repeat;
    background-position: center;
    width:.8em;
    height:.8em;
    transform: translateX(-1.2em);
    pointer-events: none;
}

.social{
    background-repeat: no-repeat;
    background-size:contain;
    padding-left: 1.5em;
    height:1.2em;
    width:15em;
    margin-bottom: 2em;
}
h5{
    font-size: 1em;
    font-weight: 600;
    margin-top:0;
}
a,h5{
    color:var(--text);
    margin-bottom: 1em;
    display:block;
}

.select-cont{
    display: flex;
    align-items: center;
}
.cont{
    display:flex;
    flex-flow: column wrap;
    gap:2em;
}
.links{
    margin:1.5em 0;
}

@media (min-width: 768px){
    footer{
        flex-flow: row wrap;
        justify-content: space-between;
        padding: 0 4em;
    }
    .links{
        margin: 0 6em;
    }
    .cont{
        flex-flow: row wrap;
    }
}
</style>

