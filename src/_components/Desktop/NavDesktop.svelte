<script>
import { goto, isActive, page, url } from '@roxi/routify';
import { onMount } from 'svelte';

import { t } from '../../stores'
let y;
$: background = y>130 || ($page.path!=='/index' && $page.path!=='/es/index');
onMount(async()=>{console.log($page.path)})
</script>

<svelte:window bind:scrollY={y}></svelte:window>

<nav style="background: rgba(255,255,255,{background ? 1 : 0})">
    <img src="/images/logo.svg" alt="logo" on:click={()=>$goto($t.links.home)}>
    <div class="links">
        <a class:active={$isActive($t.links.home)} href="{$url($t.links.home)}">{$t.nav.inicio}</a>
        <a class:active={$isActive($t.links.web)} href="{$url($t.links.web)}">{$t.nav.web}</a>
        <a class:active={$isActive($t.links.media)} href="{$url($t.links.media)}">{$t.nav.redes}</a>
        <a class:active={$isActive($t.links.com)} href="{$url($t.links.com)}">{$t.nav.com}</a>
        <a class:active={$isActive($t.links.contact)} href="{$url($t.links.contact)}">{$t.nav.contacto}</a>
    </div>
    <div></div>
</nav>
<style>
nav{
    position:fixed;
    padding:1em 1.5em;
    z-index: 999999;
    display: flex;
    width:100%;
    justify-content: space-between;
    align-items: center;
    top:0;
}
img{
    width:7em;
    cursor:pointer;
}
a{
    margin-left: 2em;
}
a:first-child{
    margin-left: 0;
}
.active{
    color:var(--magenta)
}
</style>