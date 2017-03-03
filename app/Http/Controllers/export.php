<?php

namespace App\Http\Controllers;

use Carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;

class export extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function index()
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $debugData = new \stdClass();
        $debugData->name = '105學年度第二學期第五次畢代畢編大會';
        $debugData->locate = '活動中心231教室';
        $debugData->date = '民國106年3月7日(星期二)　中午12時30分';

        // page 1
        $section = $phpWord->addSection();

        $phpWord->addFontStyle('bigTitleStyle',
            array('name'=>'標楷體', 'size'=>20, 'bold'=>true));
        $phpWord->addFontStyle('middleTitleStyle',
            array('name'=>'標楷體', 'size'=>16, 'bold'=>false));
        $phpWord->addFontStyle('titleStyle',
            array('name'=>'標楷體', 'size'=>14, 'bold'=>true));
        $phpWord->addFontStyle('contentStyle',
            array('name'=>'標楷體', 'size'=>12, 'bold'=>false));

        $section->addText('國立中正大學學生會畢業生事務委員會', 'titleStyle', array('align'=>'center'));
        $section->addText($debugData->name.'企劃書', 'titleStyle', array('align'=>'center'));
        for($i=0; $i<20; $i++) {
            $section->addText(' ', 'titleStyle', array('align' => 'center'));
        }

        $section->addText('活動地點：'.$debugData->locate, 'titleStyle', array('align'=>'center'));
        $section->addText('活動日期：'.$debugData->date, 'titleStyle', array('align'=>'center'));
        $section->addText('負責人：伍秀英', 'titleStyle', array('align'=>'center'));
        $section->addText('聯絡電話：0983-676962', 'titleStyle', array('align'=>'center'));
        $section->addText('E-mail：bearbabyshow@gmail.com', 'titleStyle', array('align'=>'center'));


        // page 2
        $section = $phpWord->addSection();
        $section->addText(' ', 'titleStyle', array('align' => 'center'));$section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('目錄', 'titleStyle', array('align'=>'center'));
        $section->addText(' ', 'titleStyle', array('align' => 'center'));$section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('壹、活動緣起………………………………………3', 'titleStyle', array('align'=>'center'));
        $section->addText(' ', 'titleStyle', array('align' => 'center'));$section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('貳、活動目的………………………………………3', 'titleStyle', array('align'=>'center'));
        $section->addText(' ', 'titleStyle', array('align' => 'center'));$section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('參、指導單位………………………………………3', 'titleStyle', array('align'=>'center'));
        $section->addText(' ', 'titleStyle', array('align' => 'center'));$section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('肆、主辦單位………………………………………3', 'titleStyle', array('align'=>'center'));
        $section->addText(' ', 'titleStyle', array('align' => 'center'));$section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('伍、參加人員………………………………………3', 'titleStyle', array('align'=>'center'));
        $section->addText(' ', 'titleStyle', array('align' => 'center'));$section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('陸、活動時間………………………………………3', 'titleStyle', array('align'=>'center'));
        $section->addText(' ', 'titleStyle', array('align' => 'center'));$section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('柒、活動地點………………………………………3', 'titleStyle', array('align'=>'center'));
        $section->addText(' ', 'titleStyle', array('align' => 'center'));$section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('捌、活動內容………………………………………3', 'titleStyle', array('align'=>'center'));
        $section->addText(' ', 'titleStyle', array('align' => 'center'));$section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('玖、活動預算………………………………………3', 'titleStyle', array('align'=>'center'));
        $section->addText(' ', 'titleStyle', array('align' => 'center'));$section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('拾、預期效益………………………………………3', 'titleStyle', array('align'=>'center'));
        $section->addText(' ', 'titleStyle', array('align' => 'center'));$section->addText(' ', 'titleStyle', array('align' => 'center'));


        // page 3
        $section = $phpWord->addSection();
        $section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('壹、活動緣起', 'titleStyle');
        $section->addText('    依據本校學生會組織規程規定，畢委會須召開會議並告知相關事宜，故召開本次大會。', 'contentStyle');

        $section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('貳、 活動目的', 'titleStyle');
        $section->addText('    畢委會幹部報告相關工作事宜。', 'contentStyle');

        $section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('參、指導單位', 'titleStyle');
        $section->addText('    國立中正大學　學生事務處課外活動組', 'contentStyle');

        $section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('肆、主辦單位', 'titleStyle');
        $section->addText('    國立中正大學 學生會 畢業生事務委員會', 'contentStyle');

        $section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('伍、參加人員', 'titleStyle');
        $section->addText('    畢委會幹部與畢代畢編，預計100人', 'contentStyle');

        $section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('陸、活動時間', 'titleStyle');
        $section->addText('    '.$debugData->date, 'contentStyle');

        $section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('柒、活動地點', 'titleStyle');
        $section->addText('    '.$debugData->locate, 'contentStyle');

        $section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('捌、活動內容', 'titleStyle');
        $section->addText('    1. 場佈
    2. 開會（詳如附件一）
    3. 場復', 'contentStyle');

        $section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('玖、活動預算', 'titleStyle');
        $section->addText('    無', 'contentStyle');

        $section->addText(' ', 'titleStyle', array('align' => 'center'));
        $section->addText('拾、預期效益', 'titleStyle');
        $section->addText('    1.正確傳達相關事宜。', 'contentStyle');


        // page 4
        $section = $phpWord->addSection();
        $section->addText('（附件一）開會通知單
        ', 'titleStyle', array('align' => 'center'));
        $section->addText('國立中正大學學生會畢業生事務委員會
        ', 'bigTitleStyle', array('align' => 'center'));
        $section->addText('畢業生代表大會　開會通知單
        ', 'bigTitleStyle', array('align' => 'center'));
        $section->addText('受文者：本校各應屆畢業班畢業生代表及畢業紀念冊編輯
        ', 'titleStyle');

        $date = Carbon\Carbon::now();
        $year = $date->year - 1911;
        $section->addText('發文日期：中華民國'.$year.'年'.$date->month.'月'.$date->day.'日', 'contentStyle');
        $section->addText('發文字號：', array('name'=>'標楷體', 'size'=>12, 'bold'=>false, 'bgColor' => 'FFFF00'));
        $section->addText('速別：普通
密等及解密條件或保密期限： 
附件：
', 'contentStyle');
        $section->addText('開會事由：'.$debugData->name, 'middleTitleStyle' );$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));
        $section->addText('開會時間：'.$debugData->date, 'middleTitleStyle' );$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));
        $section->addText('開會地點：'.$debugData->locate, 'middleTitleStyle' );$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));
        $section->addText('主持人：畢委會主委伍秀英', 'middleTitleStyle' );$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));
        $section->addText('聯絡人及電話：執行秘書蔣宜桓0936-399-759', 'middleTitleStyle' );$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));
        $section->addText('出席者：本校各應屆畢業班畢業生代表及畢業紀念冊編輯
列席者：
副本：本會行政中心秘書處', 'contentStyle');$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));
        $section->addText('備註：', 'middleTitleStyle' );$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));
        $section->addText('    一、 會議之議程將於會議前以電子文件寄送，紙本則於會場發放。', 'middleTitleStyle');$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));
        $section->addText('    二、 若不克前來者，應另請代理人出席會議。', 'middleTitleStyle');$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));
        $section->addImage('picture/logo.png', array('align' => 'center'));


        // page 5
        $section = $phpWord->addSection();
        $section->addText('國立中正大學學生會畢業生事務委員會', 'bigTitleStyle', array('align' => 'center'));
        $section->addText($debugData->name.'會議議程', 'middleTitleStyle', array('align' => 'center'));
        $section->addText('時間：'.$debugData->date, 'contentStyle');
        $section->addText('地點：'.$debugData->locate, 'contentStyle');
        $section->addText('主席：主委伍秀英　　　　　　　　紀錄：執行秘書蔣宜桓', 'contentStyle');
        $section->addText('出席人員：各系所畢業生代表及畢業紀念冊編輯', 'contentStyle');$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));

        $section->addText('會議開始', array('name'=>'標楷體', 'size'=>12, 'bold'=>true, 'underline' => 'single'));
        $section->addText('壹、 主席報告
貳、 宣讀上次會議紀錄', array('name'=>'標楷體', 'size'=>12, 'bold'=>true));
        $section->addText('    決　　定：洽悉', 'contentStyle');
        $section->addText('參、報告事項
    報告事項一', array('name'=>'標楷體', 'size'=>12, 'bold'=>true, 'bgColor' => 'FFFF00'));
        $section->addText('    報告單位：
    案　　由：
    說　　明：', array('name'=>'標楷體', 'size'=>12, 'bold'=>false, 'bgColor' => 'FFFF00'));$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));
        $section->addText('
肆、 提案討論
伍、 臨時動議
陸、 散會', array('name'=>'標楷體', 'size'=>12, 'bold'=>true));$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));$section->addText(' ', 'middleTitleStyle', array('align' => 'center'));
        $section->addText('畢委會信箱：106ccu.graduation@gmail.com
畢代畢編聯合社團：https://www.facebook.com/groups/1737748126504320/
畢委會粉絲專頁：https://www.facebook.com/CCUGAC
', array('name'=>'標楷體', 'size'=>12, 'bold'=>true));



        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('場地規劃書.docx');

        return 0;
    }
}
