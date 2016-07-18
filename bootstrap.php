<?php

namespace Beeta\EmoticonsUol;

use Flarum\Event\ConfigureFormatter;
use Illuminate\Events\Dispatcher;

function subscribe(Dispatcher $events)
{
	$events->listen(
		ConfigureFormatter::class,
		function (ConfigureFormatter $event)
		{
			$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
			$base_url = $protocol.$_SERVER['HTTP_HOST'];
			$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
			$base_url = rtrim($base_url, "/");
$event->configurator->Emoticons->add(':-D', '<img src="'.$base_url.'/assets/emos/icon_biggrin.gif" alt=":-D" title="OMG">');
$event->configurator->Emoticons->add(':-)', '<img src="'.$base_url.'/assets/emos/icon_smile.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':-(', '<img src="'.$base_url.'/assets/emos/icon_sad.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':-o', '<img src="'.$base_url.'/assets/emos/icon_surprised.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':chocado:', '<img src="'.$base_url.'/assets/emos/icon_eek.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':-?', '<img src="'.$base_url.'/assets/emos/icon_confused.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add('8-)', '<img src="'.$base_url.'/assets/emos/icon_cool.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':lol:', '<img src="'.$base_url.'/assets/emos/icon_lol.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':-x', '<img src="'.$base_url.'/assets/emos/icon_mad.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':-P', '<img src="'.$base_url.'/assets/emos/icon_razz.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':oops:', '<img src="'.$base_url.'/assets/emos/icon_redface.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':chorar:', '<img src="'.$base_url.'/assets/emos/icon_cry.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':demonio:', '<img src="'.$base_url.'/assets/emos/icon_evil.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':malefico:', '<img src="'.$base_url.'/assets/emos/icon_twisted.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':roll:', '<img src="'.$base_url.'/assets/emos/icon_rolleyes.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(';-)', '<img src="'.$base_url.'/assets/emos/icon_wink.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':!:', '<img src="'.$base_url.'/assets/emos/icon_exclaim.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':?:', '<img src="'.$base_url.'/assets/emos/icon_question.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':ideia:', '<img src="'.$base_url.'/assets/emos/icon_idea.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':seta:', '<img src="'.$base_url.'/assets/emos/icon_arrow.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':-|', '<img src="'.$base_url.'/assets/emos/icon_neutral.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':ironico:', '<img src="'.$base_url.'/assets/emos/icon_mrgreen.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':ha:', '<img src="'.$base_url.'/assets/emos/icon_ha.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':love:', '<img src="'.$base_url.'/assets/emos/icon_love.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':incrivel:', '<img src="'.$base_url.'/assets/emos/icon_awesome.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':chorar2:', '<img src="'.$base_url.'/assets/emos/icon_coolcry.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':chorar3:', '<img src="'.$base_url.'/assets/emos/icon_cryingalot.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':chorar4:', '<img src="'.$base_url.'/assets/emos/icon_cryingoffelicity.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':lagrimas:', '<img src="'.$base_url.'/assets/emos/icon_crylolim.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':girl:', '<img src="'.$base_url.'/assets/emos/icon_emosit.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':emocao:', '<img src="'.$base_url.'/assets/emos/icon_emotion.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':cobrindorosto:', '<img src="'.$base_url.'/assets/emos/icon_facepalm.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':fuuu:', '<img src="'.$base_url.'/assets/emos/icon_fuuu.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':piscadela:', '<img src="'.$base_url.'/assets/emos/icon_girlblink.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':gamado:', '<img src="'.$base_url.'/assets/emos/icon_ilove.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':lolsuper:', '<img src="'.$base_url.'/assets/emos/icon_lolsuper.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':amorodio:', '<img src="'.$base_url.'/assets/emos/icon_loveangry.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':bigode:', '<img src="'.$base_url.'/assets/emos/icon_mustache.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':nem:', '<img src="'.$base_url.'/assets/emos/icon_not.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':magoado:', '<img src="'.$base_url.'/assets/emos/icon_nvm.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':omg2:', '<img src="'.$base_url.'/assets/emos/icon_omg.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':omg3:', '<img src="'.$base_url.'/assets/emos/icon_omgrollt.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':oopscool:', '<img src="'.$base_url.'/assets/emos/icon_oopscool.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':setarosa:', '<img src="'.$base_url.'/assets/emos/icon_pinkarrow.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':rimbuk:', '<img src="'.$base_url.'/assets/emos/icon_rimbuk.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':rimbuk2:', '<img src="'.$base_url.'/assets/emos/icon_rimkuk2.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':rock:', '<img src="'.$base_url.'/assets/emos/icon_rock.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':girlshocked:', '<img src="'.$base_url.'/assets/emos/icon_shockblond.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':girlhappy:', '<img src="'.$base_url.'/assets/emos/icon_shocknorw.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':girlsad:', '<img src="'.$base_url.'/assets/emos/icon_shockpink.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':suando:', '<img src="'.$base_url.'/assets/emos/icon_sweattz.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':vamp:', '<img src="'.$base_url.'/assets/emos/icon_vamp.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':feliz2:', '<img src="'.$base_url.'/assets/emos/icon_vryhappy.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':triste2:', '<img src="'.$base_url.'/assets/emos/icon_vrysad.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':queixo:', '<img src="'.$base_url.'/assets/emos/icon_wtff.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':xis:', '<img src="'.$base_url.'/assets/emos/icon_xis.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':et:', '<img src="'.$base_url.'/assets/emos/et.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':ayy:', '<img src="'.$base_url.'/assets/emos/et.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':pingu:', '<img src="'.$base_url.'/assets/emos/pingu.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':dc:', '<img src="'.$base_url.'/assets/emos/icon_dc.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':gba:', '<img src="'.$base_url.'/assets/emos/icon_gba.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':gbasp:', '<img src="'.$base_url.'/assets/emos/icon_gbasp.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':cube:', '<img src="'.$base_url.'/assets/emos/icon_cube.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':ps2:', '<img src="'.$base_url.'/assets/emos/icon_ps2.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':xbox:', '<img src="'.$base_url.'/assets/emos/icon_xbox.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':psx:', '<img src="'.$base_url.'/assets/emos/icon_psx.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':n64:', '<img src="'.$base_url.'/assets/emos/icon_n64.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':3do:', '<img src="'.$base_url.'/assets/emos/icon_3do.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':cube2:', '<img src="'.$base_url.'/assets/emos/icon_cube2.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':dc2:', '<img src="'.$base_url.'/assets/emos/icon_dc2.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':duo:', '<img src="'.$base_url.'/assets/emos/icon_duo.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':famicom:', '<img src="'.$base_url.'/assets/emos/icon_fc1.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':famicom2:', '<img src="'.$base_url.'/assets/emos/icon_fc2.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':gameboy:', '<img src="'.$base_url.'/assets/emos/icon_gb.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':gamegear:', '<img src="'.$base_url.'/assets/emos/icon_gg.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':jaguar:', '<img src="'.$base_url.'/assets/emos/icon_jg.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':lynx:', '<img src="'.$base_url.'/assets/emos/icon_lyx.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':megadrive:', '<img src="'.$base_url.'/assets/emos/icon_md.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':neogeocd:', '<img src="'.$base_url.'/assets/emos/icon_nc.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':nes:', '<img src="'.$base_url.'/assets/emos/icon_nes.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':neogeopocket:', '<img src="'.$base_url.'/assets/emos/icon_np.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':pcengine:', '<img src="'.$base_url.'/assets/emos/icon_pce.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':psone:', '<img src="'.$base_url.'/assets/emos/icon_ps1.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':ps22:', '<img src="'.$base_url.'/assets/emos/icon_ps22.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':saturn:', '<img src="'.$base_url.'/assets/emos/icon_sat.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':superfamicom:', '<img src="'.$base_url.'/assets/emos/icon_sfc.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':snes:', '<img src="'.$base_url.'/assets/emos/icon_snes.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':virtualboy:', '<img src="'.$base_url.'/assets/emos/icon_vb.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':wonderswan:', '<img src="'.$base_url.'/assets/emos/icon_ws.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':xb2:', '<img src="'.$base_url.'/assets/emos/icon_xbox2.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':32x:', '<img src="'.$base_url.'/assets/emos/32x.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':ngage:', '<img src="'.$base_url.'/assets/emos/icon_ngage.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':ps3:', '<img src="'.$base_url.'/assets/emos/icon_ps31.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':ps3b:', '<img src="'.$base_url.'/assets/emos/icon_ps32.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':rev:', '<img src="'.$base_url.'/assets/emos/icon_rev.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':ds:', '<img src="'.$base_url.'/assets/emos/icon_ds.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':x360:', '<img src="'.$base_url.'/assets/emos/icon_x360.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':x360b:', '<img src="'.$base_url.'/assets/emos/icon_x360l.gif" alt=":omg3:" title="OMG">');
$event->configurator->Emoticons->add(':psp:', '<img src="'.$base_url.'/assets/emos/icon_psp.gi" alt=":omg3:" title="OMG">');
		}
	);
};

return __NAMESPACE__ . '\\subscribe';