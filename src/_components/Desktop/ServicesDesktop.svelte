<script>
import ServicesCardDesktop from "./ServicesCardDesktop.svelte"
import { t } from '../../stores'

</script>
<div class="container">
<slot></slot>
    <div class="front"></div>
    <div class="card-cont">
        <ServicesCardDesktop video='render1_1' title={$t.services.title1} text={$t.services.p1} link={$t.links.web}></ServicesCardDesktop>
        <ServicesCardDesktop video='render2_2' title={$t.services.title2} text={$t.services.p2} link={$t.links.media}></ServicesCardDesktop>
        <ServicesCardDesktop video='render3_3' title={$t.services.title3} text={$t.services.p3} link={$t.links.com}></ServicesCardDesktop>
    </div>
    <div class="back"></div>
</div>


<style>
.container{
    position: relative;
    width:100%;
    min-height:100vh;
}
.front{
    width:100vw;
    height:103px;
    background-size:auto;
    position: absolute;
    bottom:0;
    z-index: 5;
    background: linear-gradient(210deg,#f07eff 0%, #5fedff 100%);
    border-radius: 0 3em 0 0 ;
    filter: drop-shadow(0px 0px 20px rgba(0, 0, 0, 0.25));
}
.back{
    width: 100vw;
    height: 265px;
    background-size: cover;
    position: absolute;
    bottom: 0;
    background: linear-gradient(30deg, #ff40f0 0%, #a764eb 48.77%, #00bff8 100%);
    border-radius: 3.5em 0 0 0 ;
}
@media (min-width:768px){
    .card-cont{
    position:absolute;
    bottom: 0;
    z-index:2;
    display:flex;
    width:100%;
    max-width:1900px;
    align-items: flex-end;
    justify-content: space-evenly;
    }
    .container{
        padding-top:10em;
    }
    .front{
    margin-top: 4em;
    }
}

</style>