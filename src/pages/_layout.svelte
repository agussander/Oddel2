<script>
import Footer from '../_components/Footer.svelte'
import Nav from '../_components/Nav.svelte'
import { mobile } from '../stores'
import NavDesktop from '../_components/Desktop/NavDesktop.svelte';
import {langIsSet,lang} from '../stores'
import {onMount} from 'svelte'
import {goto,page} from '@roxi/routify'

const setInitialLang=()=>{
    if(!$langIsSet && navigator.language.substring(0,2)=='es' && $lang=='en'){
        $goto('/es'+$page.path);
    }
}
onMount (async ()=>setInitialLang());
</script>

{#if $mobile}
    <Nav></Nav>
{:else}
    <NavDesktop></NavDesktop>
{/if}
<slot></slot>
<Footer></Footer>
