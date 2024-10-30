<?php
function crw_get_locale_data () {
    $letter_data = array('en' => array('letterDist' => array('A' => 8,'B' => 1,'C' => 3,'D' => 4,'E' => 12,'F' => 2,'G' => 2,'H' => 6,'I' => 7,'J' => 1,'K' => 1,'L' => 4,'M' => 2,'N' => 6,'O' => 7,'P' => 2,'Q' => 1,'R' => 6,'S' => 6,'T' => 9,'U' => 3,'V' => 1,'W' => 2,'X' => 1,'Y' => 2,'Z' => 1,),'numerals' => 'latn','letterRegEx' => '[a-zA-Z]',),'de_DE' => array('letterDist' => array('A' => 6,'B' => 2,'C' => 3,'D' => 5,'E' => 17,'F' => 1,'G' => 3,'H' => 4,'I' => 7,'J' => 1,'K' => 1,'L' => 3,'M' => 2,'N' => 10,'O' => 2,'P' => 1,'Q' => 1,'R' => 7,'S' => 8,'T' => 6,'U' => 4,'V' => 1,'W' => 2,'X' => 1,'Y' => 1,'Z' => 1,),'numerals' => 'latn','letterRegEx' => '[a-zA-Z]',),'da_DK' => array('letterDist' => array('A' => 9,'B' => 2,'C' => 1,'D' => 5,'E' => 16,'F' => 2,'G' => 4,'H' => 1,'I' => 6,'J' => 1,'K' => 3,'L' => 5,'M' => 3,'N' => 7,'O' => 5,'P' => 1,'Q' => 1,'R' => 9,'S' => 5,'T' => 6,'U' => 2,'V' => 2,'W' => 1,'X' => 1,'Y' => 1,'Z' => 1,),'numerals' => 'latn','letterRegEx' => '[a-zA-Z]',),'es_ES' => array('letterDist' => array('A' => 12,'B' => 1,'C' => 4,'D' => 5,'E' => 13,'F' => 1,'G' => 1,'H' => 1,'I' => 6,'J' => 1,'K' => 1,'L' => 5,'M' => 3,'N' => 7,'O' => 8,'P' => 2,'Q' => 1,'R' => 7,'S' => 8,'T' => 4,'U' => 4,'V' => 1,'W' => 1,'X' => 1,'Y' => 1,'Z' => 1,),'numerals' => 'latn','letterRegEx' => '[a-zA-Z]',),'fr_FR' => array('letterDist' => array('A' => 8,'B' => 1,'C' => 3,'D' => 3,'E' => 17,'F' => 1,'G' => 1,'H' => 1,'I' => 7,'J' => 1,'K' => 1,'L' => 5,'M' => 3,'N' => 7,'O' => 5,'P' => 3,'Q' => 1,'R' => 6,'S' => 8,'T' => 7,'U' => 6,'V' => 1,'W' => 1,'X' => 1,'Y' => 1,'Z' => 1,),'numerals' => 'latn','letterRegEx' => '[a-zA-Z]',),'it_IT' => array('letterDist' => array('A' => 11,'B' => 1,'C' => 4,'D' => 3,'E' => 11,'F' => 1,'G' => 1,'H' => 1,'I' => 11,'J' => 1,'K' => 1,'L' => 6,'M' => 2,'N' => 7,'O' => 10,'P' => 3,'Q' => 1,'R' => 6,'S' => 5,'T' => 5,'U' => 3,'V' => 2,'W' => 1,'X' => 1,'Y' => 1,'Z' => 1,),'numerals' => 'latn','letterRegEx' => '[a-zA-Z]',),'nl_NL' => array('letterDist' => array('A' => 7,'B' => 2,'C' => 1,'D' => 6,'E' => 19,'F' => 1,'G' => 3,'H' => 2,'I' => 6,'J' => 1,'K' => 2,'L' => 3,'M' => 2,'N' => 10,'O' => 6,'P' => 2,'Q' => 1,'R' => 6,'S' => 4,'T' => 7,'U' => 2,'V' => 3,'W' => 1,'X' => 1,'Y' => 1,'Z' => 1,),'numerals' => 'latn','letterRegEx' => '[a-zA-Z]',),'pl_PL' => array('letterDist' => array('A' => 9,'B' => 2,'C' => 5,'D' => 4,'E' => 8,'F' => 1,'G' => 1,'H' => 1,'I' => 8,'J' => 2,'K' => 3,'L' => 4,'M' => 3,'N' => 6,'O' => 8,'P' => 3,'Q' => 1,'R' => 4,'S' => 5,'T' => 3,'U' => 2,'V' => 1,'W' => 4,'X' => 1,'Y' => 4,'Z' => 7,),'numerals' => 'latn','letterRegEx' => '[a-zA-Z]',),'pt_PT' => array('letterDist' => array('A' => 14,'B' => 1,'C' => 4,'D' => 5,'E' => 12,'F' => 1,'G' => 1,'H' => 1,'I' => 6,'J' => 1,'K' => 1,'L' => 3,'M' => 4,'N' => 5,'O' => 11,'P' => 2,'Q' => 1,'R' => 6,'S' => 8,'T' => 4,'U' => 4,'V' => 1,'W' => 1,'X' => 1,'Y' => 1,'Z' => 1,),'numerals' => 'latn','letterRegEx' => '[a-zA-Z]',),'sv_SE' => array('letterDist' => array('A' => 13,'B' => 1,'C' => 1,'D' => 4,'E' => 11,'F' => 2,'G' => 3,'H' => 2,'I' => 5,'J' => 1,'K' => 3,'L' => 5,'M' => 3,'N' => 9,'O' => 5,'P' => 1,'Q' => 1,'R' => 8,'S' => 6,'T' => 8,'U' => 2,'V' => 2,'W' => 1,'X' => 1,'Y' => 1,'Z' => 1,),'numerals' => 'latn','letterRegEx' => '[a-zA-Z]',),'tr_TR' => array('letterDist' => array('A' => 11,'B' => 3,'C' => 2,'D' => 4,'E' => 11,'F' => 1,'G' => 2,'H' => 1,'I' => 13,'J' => 1,'K' => 4,'L' => 5,'M' => 3,'N' => 7,'O' => 3,'P' => 1,'Q' => 1,'R' => 7,'S' => 5,'T' => 3,'U' => 5,'V' => 1,'W' => 1,'X' => 1,'Y' => 3,'Z' => 1,),'numerals' => 'latn','letterRegEx' => '[a-zA-Z]',),'fa_IR' => array('letterDist' => array('آ' => 1,'ا' => 13,'ب' => 4,'پ' => 1,'ت' => 5,'ث' => 1,'ج' => 1,'چ' => 1,'ح' => 1,'خ' => 1,'د' => 7,'ذ' => 1,'ر' => 7,'ز' => 2,'ژ' => 1,'س' => 3,'ش' => 3,'ص' => 1,'ض' => 1,'ط' => 1,'ظ' => 1,'ع' => 1,'غ' => 1,'ف' => 1,'ق' => 1,'ک' => 3,'گ' => 1,'ل' => 2,'م' => 5,'ن' => 6,'و' => 5,'ه' => 6,'ی' => 7,'ة' => 1,'أ' => 1,'ؤ' => 1,'ئ' => 1,),'numerals' => 'arabext','letterRegEx' => '[آ-ؤئ-غفقل-وپچژکگی]',),);
    $locale_data = array('locale' => array('down-right' => __('down and right','crosswordsearch'),'up-left' => __('up and left','crosswordsearch'),'up-right' => __('up and right','crosswordsearch'),'down-left' => __('down and left','crosswordsearch'),'down' => __('down','crosswordsearch'),'up' => __('up','crosswordsearch'),'right' => __('to the right','crosswordsearch'),'left' => __('to the left','crosswordsearch'),'new' => array('display' => __('New','crosswordsearch'),'title' => __('Start a completely new riddle','crosswordsearch'),),'load' => array('display' => __('Load','crosswordsearch'),'title' => __('Load an existing riddle','crosswordsearch'),),'update' => array('display' => __('Save...','crosswordsearch'),'title' => __('Save your work on the riddle','crosswordsearch'),),'insert' => array('display' => __('Save as...','crosswordsearch'),'title' => __('Save as a new riddle with a seperate name','crosswordsearch'),),'reload' => array('display' => __('Reload','crosswordsearch'),'title' => __('Reset to the saved version','crosswordsearch'),),'black' => __('black','crosswordsearch'),'red' => __('red','crosswordsearch'),'green' => __('green','crosswordsearch'),'blue' => __('blue','crosswordsearch'),'orange' => __('orange','crosswordsearch'),'violet' => __('violet','crosswordsearch'),'aqua' => __('aqua','crosswordsearch'),'grey' => __('grey','crosswordsearch'),),);
    $lang = get_locale();
    $lang = array_key_exists($lang, $letter_data) ? $lang : 'en';
    return array_merge($locale_data, $letter_data[$lang]);
}
