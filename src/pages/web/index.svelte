<script>
import ServicesPage from "../../_components/ServicesPage.svelte";
import { t,lang } from '../../stores'
import {onMount} from 'svelte'
import en from '../../t/en'
import {metatags} from '@roxi/routify'
metatags.title = 'Oddel Digital Marketing';
metatags.description = 'Marketing services to boost yout company';

onMount(async ()=>{
$lang='en';
$t=en;}
);
const img={
    img:'background-web.svg',
    img1:'web.png',
    alt1:'Web referencies such as a www and a globe icon',
    img2:'ecommerce.png',
    alt2:'alt2',
    img3:'landing.png',
    alt3:'alt3'
}
</script>

<ServicesPage {...$t.web} {...img}></ServicesPage>