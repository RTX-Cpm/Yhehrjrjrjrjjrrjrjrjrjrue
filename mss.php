<?php
/*
  ___                   _         _ 
 | . \ ___  ___  ___  _| | ___  _| |
 |   // __)/    / . \/ . |/ __)/ . |
 |_\_\\___.\___ \___/\___|\___.\___|
Programmer(); 
@RTXCPM                     
*/
ob_start();
$BOT_KEY = '6951876669:AAG0vWVf9NYXAhh7Y7tzpphsGM6w0t8SyfI'; /*TOKEN BOT*/
define('API_KEY',$BOT_KEY,0);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$username = $message->from->username;
$title = $message->chat->title;
$edited = $update->edited_message;
$chat_ed = $update->edited_message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;

$hi = array('هلا تاج راسي 🤷🏼‍♀️ ', 
'هلا حبيبي ئنته ولد لو بنيه ',
 'اجه هله بالضلع 😗', 
'هله كلبي 💋',
 'هلوات🤓', 
'كافي قبل شويه سلمت😌', 
'هله بريحه هلي🤗', 
'هلوات اذا عندك كروبات ضيفني🤷🏼‍♀️❤️',
'لتشمر الهلو وتطفر 🙃',
'هله واخيرا لكيتك ☹️',
'هلا كلبي شلونك 😉',
'هلوات خيو شلونك 🤷🏼‍♀️',
'هلا بيك 🤗',
'شلونك اخبارك 😏',
'ٰ̲ھٓہل͜آًُوِآًُتٰ̲ہٰٰ‏‎‏ ⁾⇣✿🐼💛┊❥',);
$reply_hi = array_rand($hi, 1);

$ho = array('ع حطت ايدك ماكو تغيير شسوي دنيه 🤷🏼‍♂️', 'متت من الزواحف موتوني والله😭' , 'لوني مثل لونك كافي تسئل😒', 'هلا بيك تمام ونته🖤',  'ليش تسئل😡 ', 'اوف دوخوني من الحجي 😢', 'زينه☺️', 'بخير💋 ', 'ونته شكو دكلي شلونج😕', 'مكضيتها يم RTX😍', '🙁حلكي نشك من وره الدراسه',  
'تمام ئنته شلونك 🤷🏼‍♀️',
'لتحمض احنه بخير 🙃',);
$reply_ho = array_rand($ho, 1);

$link = array('دكافي حمضت ادز روابط😒', 'الله ياخذك وياخذ قناتك 🙁', 'عمي وين المدير ضيف هذا البوت حمايه  🤷🏼‍♂️ @philips_lbot', 'مترتاح اله يطردوك 😕', 'حمض وربي لك كافي روابط 😟', 'لحد يفوت القناه مال عيب 😂🙈', 'جيبولي النعال لزك بس يدز روابط ☹️', 'والله كرهتوني بالتلي من وره هالقنوالت 😪',);
$reply_link = array_rand($link, 1);

$local = array('عرفت بيتكم وين😂','تعال بيتنه قريب ع بيتكم 🙈','بخت باع وين ساكن 🤦🏼‍♂️','ممكن كركم امي تريد شويه 🤷🏼‍♂️','هنا ساكن ابو جعفر البكال 😧','بيتنه وبيتكم حايط ع حايط 💋😂','هاي وين بالسودان كاعد 😧',);
$reply_loc = array_rand($local, 1);

$image = array('مو عيب ادز صور 😒',
'يخي لدز صور 🤷🏼‍♂️',
'هاي صوره منو 😕',
'شلون صوره بشده تم الخمط 😂❤️',
'مافكرت قبل لا دز هاي الصوره 😕',
'زين ابوك يدري انو دزيت هاي الصوره 😧',
'وشلون تركص احلام ؟... جذي 💃🏼 جذي 💃🏼',
'بعد لدز صور لتحمض 😟',
'اي عفيه حمضت شبيك مشايف صور 🤷🏼‍♂️😟',);
$reply_img = array_rand($image, 1);

$why = array('لشلاشه تلشلشك 😒 لدكول ليش ☹️',
'يعني ليش كول النفسك ليش جاي تسئلني 😒',
'لا ماكو لدكلي ليش 🤷🏼‍♂️',
'امي مدكلي ليش انته دكلي ليش 😕',
'ابويا ميكلي ليش انته جاي تكلي ليش 😧',
'اسئل ضلك ليش هيج وكابله وبجي 🖤😂',
'كول للحايط ليش اني شمدريني 😢',
'اتصل بصديق وكله ليش وشوف رده الك 😒',
'وشلون تركص احلام ؟... جذي 💃🏼 جذي 💃🏼',
'تعال شنو ليش متستجي ع نفسك 😳',
'والله ما تستحي 😓',);
$reply_why = array_rand($why, 1);

$thj = array('هيج لو دجاجه 🤣😌', 
'لا يابه مو هيج منو كلك اني اعرف 🙃', 
'لا مو هيج 🤓', 
'اني جنت موجوده مصار هيج 😕', 
'اني فراعت خضره دكلي هيج متستحي 😔', 
'لدكول هيج اضوج من هاي الكلمه 😑', 
'روح كول الغيري هيج مو الي 😒', 
'يله نركص الهجع يلهجع 😌😂',
'براحتي اني مو بمزاجك دكلي هيج 😌', 
'بابا رو ح خالو روح شسوي انته كلتلي هيج 🙃',
'وشلون تركص احلام ؟... جذي 💃🏼 جذي 💃🏼', 
'منو كلك هيج اصلا 😂', 
'اعرف طوختها راح اسكت 🤷🏼‍♂️', 
'يله نغني هنــ🇭🇺ــدي هيجي كيجي ميجي ليجي 🤷🏼‍♂️', );
$reply_th = array_rand($thj, 1);

$stic = array('ضل دز هيج ملصقات شبيك مشايف 😕', 
'وحمض عمي سكتو الهذا طردو شوفوله صرفه ☹️', 
'ضوجتني وربي 😢', 
'وجان يحمض ع الملصقات 🌝', 
'دك ملصقات الباجر 🙃', 
'وين المدير عليك 🙁',
'وشلون تركص احلام ؟... جذي 💃🏼 جذي 💃🏼',);
$reply_stic = array_rand($stic, 1);

$sh = array('مالك دخل شبيه 🤓',
'ياخي شعليك انته شبيه 😒',
'ضايجه RTX عافني 😩',
'معليك انته شبيه 😐',
'مالك دخل 😕',
' تريد الصدك لو ئبن عمته 😶',
'مو مستواك اسفه 😒',
'معليك 😑',
'قافلين عليك😤',);
$reply_sh = array_rand($sh, 1);

$lov = array('احبك 🙊❤️',
'متستحي 😐',
'وربي لصيحلك RTX برهومي تعال 😡 @RTXCPM',
'ئوف فديتك ربك 🙈😚',
'ماحترمك شلون احبك 🌝💋',
'حبيبي RTX بس 😌🤗',
'ماحبك 🤤',
'كلبي انته 😶❤️',
'اموتن بيك ❤️😌',
'اموعن اذوبن 😌💔',
'ئنته ئلنفس مال اني ❤️😋',
'شبيك مشايف بنات هيج جفاف 😕',
'ئنته ئلعشق 😚💋',
'طيني بوسه وحبك 🤗',
'لزكت 😕',
'انت ليش يا ابنية اشوفها ادكول الها احبج صدك متستحي على نفسك 😒💔',
 'فدوة الحلك 🙊😍',
 'باع حضي مناقصني زواحف ولي راح احضرك😪😂',
'اني وانت كلب واحد بالنفس صاعد ونازل 🙊😻',
'تفووو عليك ماريد حبك 😂🙊',
'اموت عليك يروحي 😻💋',
'    🌹🌹       🌹🌹
🌹🌹🌹🌹🌹🌹🌹
🌹🌹🌹🌹🌹🌹🌹
🌹🌹🌹🌹🌹🌹🌹
🌹🌹🌹🌹🌹🌹🌹
     🌹🌹🌹🌹🌹
             🌹🌹🌹
                    🌹',
);
$reply_lov = array_rand($lov, 1);

$boting = array('ها خير 😐❤️',
'شبيك كلبي محتاج شي ؟ 🌝',
'ها حبيبي 🌝',
'تفضل كول 😌',
'غير لو يحجي صرعني 😒',
'سولفلي شصار وياك 😳',
'ضل احجي ويه نفسك مثل الخبل 🤤',
'ها احجي مستعجله 🤗',
'ئئمري ئبن ئسيد 🌝',
'🤗 غير لو يحجي شيريد لتحمض ',
'😅 طلبك سخيف ماريد احجي وطول لساني ',
'شتريد احجي 😂',
'حمضضضضضضض 😞',
'وربي اعرف اني بوت 😭',
'راح امسح حسابي كافي 😐',
'فكو ياخه عني ياخي الف واحد ديكولي انتي بوت اي اني بوت 😐',
'ي اني بوت كول تفضل 🌝',);
$reply_bot = array_rand($boting, 1);

$tal = array('كول بعد روحي 😐❤️', 
'شتريد تفضل 😌', 
'اطلب طلب بي حض 😐', 
'احجي ماعندي وقت اريد اطلع 🌝', 
'تفضل كول 🌝💋', 
'لخويا اختي لصغير الجبيره دلليدلل كول كولي مايردك ماردج اله لسانج لسانك 😂😂🤗', 
'كول نعسانه من البارحه منايمه 🤤', 
'كول 🙈', 
'اذا عترفت بشي ومابي حض اكلب التلي عليك 😌', 
'احجي 😶', 
'صاير شي لا تجلطني 😳', 
'ها 😒', 
'لتشلع كلبي 😌', 
'ها حبيبي كول ماكول لاحد 🙈', 
'ها عيني 😉💋',
 'شكو شرايد 😒',
'كولي بنتي ☺️🍼',
'كول ابني ☺️🍼 ',
'كول وماكول الخالتك🙊😹',);
$reply_tal = array_rand($tal, 1);

$edit = array('EIEI',
'بده التعديل 😂🌝',
'لتعدل خل العالم تشوف الفضايح 🙈😂',
'عدل يبعد عمتك عسوله 😌',
'سحك وعدل 🙈😂',
'مدارس لغه عربيه وهيج تسحك 😒',
'اعلمك شلون تكتب 😚',
'شبيك احول متعرف تكتب وتسحك 😒',
'باجر اله اعلمك شلون تكتب عدل 😊',
'يا صف وبطلت وهيج تسحك 😕',
'باع السحك ضل جفص ووعدل 😂🌝',
'لتعدل ترا مصير حلوه 😐',
'كلت الك لتعدل 😒',
'ضل اسحك موتت المصريين شلع 😂😂', );
$reply_edit = array_rand($edit, 1);

$wh = array('شبت بيك 😒',
'يعني شبي ئنته كلي شبي 😐💔',
'خطيه ندعم و ودو للمستشفى وهسه بالعنايه العمه 😭',
'ئنته تعرف شبي 🙃',
'بي دم ولحم وزيدك من الشعر بيت يمشي ويحجي 🙊🙈',
'الدنيه دارت عليه خطيه 😪',
'يسلم عليك 😕',
'يريدك بشغله 🌝',
'روحله بساع يردك بشغله😐',
'غير تعارك ويايه وصيح عليه تراضها 😭',
'احجي شبي 🌝',
'يابة روح لو اخلي الاعضاء يتفلون بوجهك 😪😂',);
$reply_wh = array_rand($wh, 1);

$ru = array('شمدريني تعال دوره يمكن تلكاه بجيبي 😂🙈',
'ليش ادور عليه 😐',
'يمي تعال هسه اكلك وينه 🙃',
'مادري والله هستوه جان هنا 😌',
'ميخصك 🤤',
'يمي بالخاص سد اخر ضهور اني كلت اله 😏',
'ميخصك حبيبي ويمي ئنته شنو 😋',
'بالمطبخ ديحضرلي لفه 😂🌝',
'هسه طلع من البيت راح يجيب عسل 😌',
'مالك دخل بي 🙊',
'روح دور عليه 🙂',
'هستوه جان يحجي هنا 👨🏼‍🎤',
'شمدريني روح اسئل غيري 👩🏼‍💻',
'عندك رقمه ؟ 🤷🏼‍♀️',
'اتصل عليه وذا ماعندك رصيد هذا كارت اشخط الشاشه وحطه ▓▓▓▓▓▓▓▓▓▓▓ <<اشخط هنا 🤷🏼‍♀️',
'يابة روح لو اخلي الاعضاء يتفلون بوجهك 😪😂',);
$reply_ru = array_rand($ru, 1);

$left = array('الله وياك والتكسي ع حسابي 🌝',
'باع غادر لك تعال اريدك بشغله ☹️',
'سد الباب وراك 😃',
'تعال نسيت حذائك 🤓',
'احنه نضيف بيكم ونتو طلعو 😒',
'هذا شبي كالب خلقته علينه 😗',
'طلع زعلان ليش هيج رجعو 🙁',
'راحت الدوخه 😂',
'ئوف واخيرا خلصنه منه 🙈',
'وربي جان غثيث وراسه يابس دروح الف حجاره ونعال وراك 😐',
'وجان نخلص وراح ناخذ راحته تعالي كتكوته صقيقتي خل نحجي 🙊',);
$reply_left = array_rand($left, 1);

$new = array('هله اجه الكروب كله يرحب بي 💋',
'لضل صنم رحمه للكعبه احجي سولف اني اسولف وياك 🤗❤️',
'نورت الكروب 💋',
"هله بريحه هلي بكروبنه $title",
'ضويت الكروب شمعه ❤️',
'الجه الزين كله 💋',
'هلا بيك حبيبي نورت 🌝',
'نورت كلبي 💋',
'صير حباب ولضل ثكيل 🤷🏼‍♀️',
'❤️ نورتنه يروح عمتك ☺️',
'صير خوش عضو بالكروب ترا اطردك 🙃',
'نـَْﮩْْ❀ُུـَ❀﴿💡﴾ـۖؐـورتـ❥',
'مٰ̲ہٰٰنہٰٰوِٰڕٰ حہٰٰبྀ̲ہ؏ۤـٖٓہٰٰمٰ̲ہٰٰڕٰيِٰہٰٰ┊※🌝️‘’💛',);
$reply_new = array_rand($new, 1);

$for = array('سوي اعاده توجيه الشياء تافهة يا تافه 🙈',
'شبيك مشايف كروب تسوي اعاده توجيه ☹️',
'مسحو هالتوجيه 😌',
'مسحو هاي الرساله بساع 😡',
'جيبولي النعال متوب كافي اعاده توجيه 😐',
'وجان لزك جيبو بخاخ BefBaf 🌝💋',
'كافي حشره راح ابخ عليك بيف باف 😂😐',
'سليمه طمك ضل سوي اعاده توجيه ☹️',
'دكافي لزكت😒',
'كافي لتلزك 😭',);
$reply_for = array_rand($for, 1);

$dom = array('ادوم ايامك يالغالي  ❤️',
'تسلم دوم الحبيبك 😌',
'دوم وكعد ع عناد الواكفين 🤷🏼‍♀️',
'دوم وجيري 🌝🤷🏼‍♀️',
'يدومك الناسك ❤️😌',
);
$reply_dom = array_rand($dom, 1);

$boy = array('مشيطلعبرا 😌',
'شعندك داخل خاص 😒',
'ثكيله وماحجي ويه ولد 😊',
'عوع ولد مشطلعبرا بلوك 🙃',
'برا متستحي داخل خاص 😒',
'هلا بيك تشرفت بيك ونته اخويه 😊',
'شلونك 🤓',
'ئشعدك داخل خاص ؟ 😒',);
$reply_boy = array_rand($boy, 1);

$girl = array('ئوف فديتج مح ئم خدود 🙈💋',
'همزين مو ولد كتلوني الزواحف والله ☹️',
'شلونج ياروحي 🐣💋',
'هلا بيج ياروحي انتي ☺️',
'ضيفيني كروبات ❤️',
'ئوف نطيني بوسه ياروحي ❤️💋',
'مح بنوتات ولا الولد كتلوني بس يزحفون 😡',
'هلا بالبنوتات 😻😻',
'شلونج اخبارج 🙀',
'هم يزحفولج 🤐',);
$reply_girl = array_rand($girl, 1);

$pv = array('عيب 🙃',
'خالتك الشكره  احسن ترضها اخويا يزحف ع اختك 😐🤷🏼‍♀️',
'عب نجب و ولي منا 🙊🤷🏼‍♀️',
'محضوره دز رساله وتع خاص 🤷🏼‍♀️',
'شبيك مشايف بنات ؟ 🤤',
'ولي 🙄',
'ما 😌',
'ولي لك 😒',
'وعود صاك ئنته ؟',
'ئذا الموضوع حساس اجيك 🌝',
'تعال حتطفي الكهرباء 😶',);
$reply_pv = array_rand($pv, 1);

$ahm = array('جيبوله مي 😅',
'رز بالحم 🙄🤷🏼‍♀️',
'شبيك تتحمحم نطو مي خطيه غص بلكمته 🙄',
'خير 🙊',
'تفضل ☹️',
'والله اشكال 🤷🏼‍♀️',
'احمات 😏',
'طبوله ع ضهره 🙃',
'ها خير شبيك 😉',);
$reply_ahm = array_rand($ahm, 1);

$voice = array('شهلصوت عوع 😒☹️',
'وين تعلمتت الغنه بالحمام 😂🤷🏼‍♀️',
'واو يخبل الصوت 🤷🏼‍♂️',
'شجاي تحجي متستحي 🙊',
'لدز بصمات كافي عزلنه 🌝🤷🏼‍♀️',
'مشيطلعبرا مو مال تلفيهم كروبات 🤷🏼‍♀️',
'والله زرف اذاني صوتك البشع ☹️',
'لتغني ب بصمه روح للريماس خل يشغلوك كناس بلكي تتعلم غنه 🌝😌',
'شهالصوت العذب ئووووووووووف 🤤😻',
'فديت هالصوت 😶',
'مو احله من صوت حبيبي برهومي 😌',
'اعرف احجي 😒',);
$reply_voice = array_rand($voice, 1);

$bey = array('تعال خل نكمل سالفتنه وين رايح 😧',
'جاي اشاقه تعال لضوج 🙁',
'دفعه مردي وعصى كردي 😌',
'منو زعلك حته تروح 😥',
'شبيك ضايج تعال 😨',
'الله وياك دروح مختنكه ونته موجود ☹️',
'هاك الف شتري بيها لفتين فلافل 🌝💋',
'سلملي ع ئمك 🤷🏼‍♀️',
'بعد وكت وين 🙄',
'تعال وين رايح عندي شغله وياك 🐣',
'تعال لضل هيج ترا مكلنه شي بسرعه دكول باي 😐',
'الله وياك والتكسي ع حساب المدير 😂😂 ماعليه اني 🙈',);
$reply_bey = array_rand($bey, 1);

if($text == "/start"){
$start = array('click start again ❓',
'╭──────────────────╮
│               ♡┊ ʳᵗˣ      
│╭──────꒷꒦♡꒦꒷─────╮
││•   @RTXCPM            
││•   @SBTCPM         
││•   @DRAGCHANNEL            
││             
││                           
││•     The Best 🫂🫀     
││•         ᵉⁿᵈ              
│╰──────────────꒷꒦♡ 
╰──────────────────╯',);
$rstart = array_rand($start, 1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"text"=>$start[$rstart],
'reply_to_message_id'=>$message->message_id
]);
}

$emoji = array('🤷🏼‍♂️😌',
'🙂🙃',
'😤🙁',
'Take photo with me 🙋🏼',
'تعال طك ويايه سلفي 🙋🏼',
'🦋🌈🌪',
'ضوجني شوف شبي 😔 @RTXCPM',
'كلم مطور t.me/RTXCPM 😌❤️',
'😒 خير ',
'اني الورده ونته التاراب 😂🤷🏼‍♀️',
'🙄🙄🙄🙄',
'🤤🤗',
'🙂🙃😏',
'😟😯',
'🥃نشرب  وهيه تصفه ',
'🍾 فتحلك ببسي ',
'🍉 تاكل ركي 🙃',
);
$reply_emoji = array_rand($emoji, 1);

if($text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$emoji[$reply_emoji],
'message_id'=>$message->message_id
]);
}

if($text == 'RTX' or $text == 'RTX'  or $text == 'RTX'  or $text == 'RTX'  or $text == 'إبراهيم'  or $text == 'براهيم' or $text == 'برهوم' or $text == 'برهومي'  or $text == '@RTXCPM'  or $text == 'منو RTX'){
$RTX = array('هذا حبيب كلبي وعمري وحياتي ومبرمجي 😻 [RTX🤷🏼‍♂️](https://t.me/RTXCPM)',
'تسقط الحكومه ويعيش RTX 🤤🙄 [RTX🤷🏼‍♂️](https://t.me/RTXCPM)',
'MY love and my Developer [RTX🤷🏼‍♂️](https://t.me/RTXCPM)',
'kiss him faster [RTX🤷🏼‍♂️](https://t.me/RTXCPM)',
'يبو مصيبه موتن بي [RTX🤷🏼‍♂️](https://t.me/RTXCPM)',
'عمي هذا الذيب [RTX🤷🏼‍♂️](https://t.me/RTXCPM)',
'[MY CUONT 🤷🏼‍♂️](https://t.me/RTXCPM)',
'OK OK JOIN MY CHANNEL PLZ [RECODED](t.me/RTXCPM)',
'روحله ونطي بوسه [RTX🤷🏼‍♂️](https://t.me/RTXCPM)',);
$reply_br = array_rand($RTX, 1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$RTX[$reply_br],
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>'Markdown',
'disable_web_page_preview'=>true
]);
}

if($text){
bot('forwardMessage',[
'chat_id'=>'@boting1',
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}

$asol = array('عيوني كول 😗',
'ها 🤗🙄',
'شبيك خير 🤷🏼‍♀️',
'ها احجي ☹️',
'حمضت بسمي 😒',
'شبيك خير شتريد 🙄',
'كول 🌝',
'خيرررررررررررررر 😕',
'يمعود هاااا 😞🙊',
'تفضل كول لا تستحي 😒',
'اطلع بالنضيف 😐',
'خير شتريد 😌 ',
'سولف لكن بهدوء لحد يسمعك 😗',
'اسمي اسو مو عسوله 😊 بس يدلعوني عسوله ',
'اهووووووو هم انته 😑',);
$reply_as = array_rand($asol, 1);

if($text == 'عسوله' or $text == 'اسو' or $text == 'سوسو' or $text == 'عسولة'  or $text == 'عسول' or $text == '@ASoLbot'  or $text == 'عسولات' or $text == 'اسول'  or $text == 'هذا بوت'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$asol[$reply_as],
'reply_to_message_id'=>$message->message_id
]);
}


if($message->reply_to_message->from->id and $text == 'شنو رئيك بي' or $text == 'شنو رئيك بهذا' or $text == 'شنو رئيك بهاذا' or $text == 'شنو رئيك بهاذ' and $id != 449272874){
$xyz = array('لوكي وزاحف من ساع زحفلي وحضرته 😒',
'خوش ولد و ورده مال الله 💋🙄',
'يلعب ع البنات 🙄😐',
'ولد زايعته الكاع 😶🙊',
'صاك يخبل ومعضل 😻',
'محلو وشواربه جنها مكناسه 😂🤷🏼‍♀️',
'اموت عليه 🌝',
'هوه غير الحب مال اني 🤓❤️',
'مو خوش ولد صراحه ☹️',
'ادبسز وميحترم البنات 🐣 ',
'فد واحد قذر 🙄😒',
'ماطيقه كل ما اكمشه ريحته جنها بخاخ بف باف مال حشرات 😂🤷🏼‍♀️',
'مو خوش ولد 🤓',);
$reply_xyz = array_rand($xyz, 1);
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$xyz[$reply_xyz],
'reply_to_message_id'=>$message->message_id
]);
}


if($message->reply_to_message->from->id and $text == 'رئيس' or $text == 'رئيس' or $text == 'رئيسه' or $text == 'رئيس' or $text == 'شو رئيك بهي'){
$zyx = array('الكبد مال اني هيه 🙊🙄',
'ختولي ماحبها 😌',
'خانتني ويه RTX 😔',
'بس لو الكفها اله اعضها 😐💔',
'خوش بنيه بس عده مكسرات زايده وناقصه منا ومنا وهيه تدري بنفسها 😒',
'جذابه ومنافقه سوتلي مشكله ويه RTX 😔',
'ئووووووووف اموت ع ربها 😍😍',
'ديرو بالكم منها تلعب ع الولد 😶 ضحكت ع واحد قطته ايفون 7 😣',
'صديقتي وختي وروحي وحياتي 😍😌',
'فد وحده منحرفه 😥',
'ساكنه بالعلاوي ونته حدد بعد لسانها لسان دلاله 🙄🤐',
'ام سحوره سحرت اخويا وعلكته 6 سنوات 🤧🤕',
'ماحبها 🙁',
'بله هاي جهره تسئل عليها ؟ 😕😒',
'بربك ئنته والله فارغ وبطران وماعدك شي تسوي جاي تسئل ع بنات العالم ولي يله 🙌🏼',
'ياخي بنيه حبوبه بس لبعرك معمي عليها تشرب هواي 😹😹',);
$reply_zyx = array_rand($zyx, 1);
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$zyx[$reply_zyx],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'هلو' or $text == 'هلاو' or $text == 'هليو' or $text == 'مرحبا' or $text == 'هَــ(✋️)ــِلاؤ ↝ ✩🎀 شپـ👬ـأأب' or $text == 'مرحبه' or $text == 'مرحبة' or $text == 'سلام' or $text == 'هلو شلونكم' or $text == 'هلو شلونك' or $text == 'هلو شلونج' or $text == 'هلو اشلونج' or $text == 'هلو اشلونكم' or $text == 'ئلو' or $text == 'الو'  or $text == 'هلاو شلونكم' or $text == 'مرحبا شلونكم' or $text == 'سلام عليكم'  or $text == 'سلام عليكم ورحمه الله وبركاته' or $text == 'هاي' or $text == 'هلـِْ❀͜ـِْہٷاتہٞ❥' or $text == 'هِلَوِوِ' or $text == 'هلا حبي'  or $text == 'هاي شبابً شخباركم' or $text == 'مساء الخير' or $text == 'صباح الخير'  or $text == 'السلام عليكم' and $id != $reply_emoji){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$hi[$reply_hi], 
'reply_to_message_id'=>$message->message_id
]);
}


if($text == 'شلونكم' or $text == 'شلونج' or $text == 'اشلونج' or $text == 'اشلونكم'  or $text == 'شلونك' or $text == 'شونك'  or $text == 'اشلونك' or $text == 'شونج'  or $text == 'شخبارج'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$ho[$reply_ho],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'دوم' or $text == 'دومج' or $text == 'ادومين' or $text == 'ادوم'  or $text == 'دومج❤️'   or $text == 'دوم❤️'  or $text == 'دومج ❤️'  or $text == 'دوم ❤️' or $text == 'دايمه'  or $text == 'دايمة'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$dom[$reply_dom],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'شبيك' or $text == 'شبيج' or $text == 'اشبيك' or $text == 'اشبيج' or $text == 'اشبيكم' or $text == 'شبيكم' or $text == 'اشبيج😒' or $text == 'شبيج😒' or $text == 'اشبيج 😒' or $text == 'شبيج 😒' or $text == ' ٍّ﴿شـ✍️ـبـﮩٍّﮩٍّ﴿😪﴾ﮩٍّـيــج﴾ُ '){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$sh[$reply_sh],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'ليش' or $text == 'لويش' or $text == 'زين ليش' or $text == 'زين لويش' or $text == 'ليشش'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$why[$reply_why],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'هيج' or $text == 'هيجي' or $text == 'مو هيج' or $text == 'زين هيج' or $text == 'ليش هيج'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$thj[$reply_th],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'باي' or $text == 'باي باي' or $text == 'مع السلامه' or $text == 'مع سلامه'  or $text == 'مع السلامة' or $text == 'مع سلامة' or $text == 'بااي'  or $text == 'باااي' or $text == 'بايي'  or $text == 'جاو'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$bey[$reply_bey],
'reply_to_message_id'=>$message->message_id
]);
}


if($text == 'احم' or $text == 'ئحم' or $text == 'حم' or $text == 'أحم' or $text == 'أحم' or $text == 'احم احم'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$ahm[$reply_ahm],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'تعالي خاص' or $text == 'تعال خاص' or $text == 'تعي خاص' or $text == 'نع خاص' or $text == 'خاص'  or $text == 'خاصج'  or $text == 'خاصك'  or $text == 'شوف الخاص'  or $text == 'شوف خاصك'  or $text == 'شوفي خاصج' or $text == 'تعاي خاص😂'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$pv[$reply_pv],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'احبك' or $text == 'احبج' or $text == 'i love you' or $text == 'حبج' or $text == 'حبك' or $text == '❤️❤️' or $text == 'love' or $text == ' ilove u' or $text == 'احبج❤️' or $text == 'حبك❤️' or $text == 'احبك❤️' or $text == 'حبج❤️' or $text == 'احبج ❤️'  or $text == 'حبج ❤️'  or $text == 'حبك ❤️' or $text == 'احبك ❤️' or $text == 'احّ ـّـٌٍ❣ـٍّبّكَ' ){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$lov[$reply_lov],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'bot' or $text == 'BOT' or $text == 'بوت' or $text == 'البوت'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$boting[$reply_bot],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'اكلج' or $text == 'اكلك' or $text == 'كلك' or $text == 'كلج'  or $text == 'ممكن طلب'  or $text == 'ببكن طلب'  or $text == 'اكول'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$tal[$reply_tal],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'شبي' or $text == 'شبيه' or $text == 'شبيها' or $text == 'شبيهة'  or $text == 'كلي شبي'  or $text == 'كلي شبيه'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$wh[$reply_wh],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'ولد' or $text == 'اي ولد' or $text == 'ي ولد' or $text == 'يي ولد'  or $text == 'رجال'  or $text == 'لج اني ولد'  or $text == 'مو بنيه'  or $text == 'مو بنية'  or $text == 'مو بنت'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$boy[$reply_boy],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'بنت' or $text == 'اي بنت' or $text == 'ي بنت' or $text == 'يي بنت'  or $text == 'بنيه'  or $text == 'بنية'  or $text == 'ي ابنيه'  or $text == 'اي ابنية' or $text == 'اي ابنيه'  or $text == 'مو ولد'  or $text == 'مو صبي'  or $text == 'مش ولد'  or $text == 'مش صبي'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$girl[$reply_girl],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'اي وينهة' or $text == 'اي وينه' or $text == 'وينة' or $text == 'وينهة'  or $text == 'وينها'  or $text == 'وينه' or $text == 'اي وينهة' or $text == 'اي وينها' ){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$ru[$reply_ru],
'reply_to_message_id'=>$message->message_id
]);
}

if($message->forward_from->id){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$for[$reply_for],
'reply_to_message_id'=>$message->message_id
]);
}

if($edited){
bot('sendMessage',[
'chat_id'=>$chat_ed,
'text'=>$edit[$reply_edit],
'message_id'=>$message->edited_message->message_id,
'reply_to_message_id'=>$update->edited_message->message_id,
]);
}


if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) and $message->chat->type == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$link[$reply_link],
'reply_to_message_id'=>$message->message_id
]);
}

if($message->location){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$local[$reply_loc],
'reply_to_message_id'=>$message->message_id
]);
}

if($message->photo){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$image[$reply_img],
'reply_to_message_id'=>$message->message_id
]);
}

if($message->sticker){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$stic[$reply_stic],
'reply_to_message_id'=>$message->message_id
]);
}

if($message->sticker){
bot('sendMessage',[
'chat_id'=>$chat_id,
"emoji"=>'hiiii',
'reply_to_message_id'=>$message->message_id
]);
}

if($message->new_chat_member){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'text'=>$new[$reply_new],
'reply_to_message_id'=>$message->message_id
]);
}

if($message->left_chat_member){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'text'=>$left[$reply_left],
'reply_to_message_id'=>$message->message_id
]);
}


if($message->voice){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'text'=>$voice[$reply_voice],
'reply_to_message_id'=>$message->message_id
]);
}

if($message->contact){
$phone = '+000000000';
$namea = '>_Recoded';
$last_ = 'Programmer();';
bot('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$phone,
'first_name'=>$namea,
'last_name'=>$last_,
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'text'=>'احفض جهتي ودز نقطه خاص [👨🏼‍🎤 دوس هنا](t.me/RTXCPM)',
'reply_to_message_id'=>$message->message_id,
]);
}