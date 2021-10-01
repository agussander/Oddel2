<script>
import { t } from "../stores";
import ServicesCard from "./ServicesCard.svelte";
</script>

<slot></slot>
<div class="cont">
    <div>
        <ServicesCard title={$t.services.title1} video='render1_1' link={$t.links.web}></ServicesCard>
        <ServicesCard title={$t.services.title2} video='render2_2' link={$t.links.media}></ServicesCard>
        <ServicesCard title={$t.services.title3} video='render3_3' link={$t.links.com}></ServicesCard>
    </div>
</div>


<style>
.cont{
    display: flex;
    justify-content: center;
}
.cont{
    margin-top: 4em;
}
</style>
