<script>
import {cubicInOut} from 'svelte/easing'
import {fly} from 'svelte/transition'
import { goto } from '@roxi/routify'
import { t } from '../stores';
let x;
const navigate=(link)=>{
    $goto(link);
    active=false;
}
export let active = false;
</script>

{#if active}
    <div bind:clientWidth={x} transition:fly={{ x:x, duration: 500, easing:cubicInOut, opacity:1 }} class="card">
        <span on:click={()=>navigate($t.links.home)}>{$t.nav.inicio}</span>
        <span on:click={()=>navigate($t.links.web)}>{$t.nav.web}</span>
        <span on:click={()=>navigate($t.links.media)}>{$t.nav.redes}</span>
        <span on:click={()=>navigate($t.links.com)}>{$t.nav.com}</span>
        <span on:click={()=>navigate($t.links.contact)}>{$t.nav.contacto}</span>
    </div>
{/if}

<style>
.card {
    position: fixed;
    height: 100vh;
    width: 60%;
    top: 0;
    right: 0;
    z-index: 1999;
    padding:5em 1.5em;
    display: flex;
    flex-flow: column;
    background-color: white;
}
span{
    text-align: right;
    font-size: 1.1em;
    margin-bottom: 2.5em;
    cursor:pointer;
    color:var(--text)
}
</style>
