<script>
import { goto } from "@roxi/routify";
import { t } from "../stores";

import MobileMenu from "./MobileMenu.svelte";

    let menu;
</script>

<nav>
    <img src="/images/logo.svg" alt="logo" on:click={$goto($t.links.home)}>
    <MobileMenu active={menu}></MobileMenu>
    <span alt="menu" on:click={()=>menu=!menu}></span>
</nav>


<style>
nav{
    padding:.7em 1em .5em 1.5em;
    display:flex;
    width: 100%;
    max-width: 100vw;
    background-color: white;
    justify-content: space-between;
    align-items: center;
    padding-right: 1.5em;
    position:fixed;
    top:0;
    z-index: 99999;
    box-sizing: border-box;
}
span{
    display:block;
    width: 1.2em;
    height: 1.2em;
    background: url('/images/icon-menu.svg') no-repeat;
    background-size:contain;
    z-index:2000;
}
img{
    cursor:pointer;
}

</style>