<script>

import {t} from '../stores'
import WwhCard from './WwhCard.svelte';



</script>

<div class="container">
    <WwhCard text={$t.wwh.title1} p={$t.wwh.p1} img={'/images/megaphone-gray.svg'} alt={$t.wwh.alt1} imgOpen={'/images/megaphone-gradient.svg'}></WwhCard>
    <WwhCard text={$t.wwh.title2} p={$t.wwh.p2} img={'/images/handshake-gray.svg'} alt={$t.wwh.alt1} imgOpen={'/images/handshake-gradient.svg'}></WwhCard>
    <WwhCard text={$t.wwh.title3} p={$t.wwh.p3} img={'/images/group-gray.svg'} alt={$t.wwh.alt1} imgOpen={'/images/group-gradient.svg'}></WwhCard>
</div>


<style>
    .container{
        display:flex;
        min-height: 500px;
        flex-wrap: wrap;
        gap:4em;
        margin:3em auto 0;
        justify-content: center;
        align-items: center;
        max-width:95%;
    }
</style>