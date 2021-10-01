<script>
import { Router, goto, page } from "@roxi/routify";
import { onMount } from "svelte";
import { routes } from "../.routify/routes";
import { mobile, w, h, langIsSet } from './stores'

let wi,he;
window.addEventListener('resize',()=>{
    $w=wi;
    $h=he;
    $mobile = wi<768;
});

onMount (async ()=>{
    $mobile = wi<768;
});

</script>
<svelte:window bind:innerWidth={wi} bind:innerHeight={he}></svelte:window>


<Router {routes} />
