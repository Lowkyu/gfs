function formCheck(){
    var flag = 0;

    // 入力必須項目が入力されているかチェック
    if( document . Form1 . frmAtdnum . value == "" ){ // 出席番号未入力の場合
        flag = 1;
        document . getElementById( 'noticeAtdnum' ) .classList.add('caution');// 注意文を表示
    }else{ // 名前が入力済みの場合
        document . getElementById( 'noticeAtdnum' ).classList.remove('caution'); // 注意文を非表示
    }

    if( document . Form1 . frmName . value == "" ){ // 名前が未入力の場合
        flag = 1;
        document . getElementById( 'noticeName' ) .classList.add('caution');// 注意文を表示
    }else{ // 名前が入力済みの場合
        document . getElementById( 'noticeName' ).classList.remove('caution'); // 注意文を非表示
    }

    if( document . Form1 . frmGender . value == "" ){ // 性別が未選択の場合
        flag = 1;
        document . getElementById( 'noticeGender' ) .classList.add('caution');// 注意文を表示
    }else{ // 名前が入力済みの場合
        document . getElementById( 'noticeGender' ).classList.remove('caution'); // 注意文を非表示
    }

    if( document . Form1 . frmBirthMonth . value == "" || document.Form1.frmBirthDate.value==""){ // 誕生日が未選択の場合
        flag = 1;
        document . getElementById( 'noticeBirth' ) .classList.add('caution');// 注意文を表示
    }else{ // 名前が入力済みの場合
        document . getElementById( 'noticeBirth' ) .classList.remove('caution');// 注意文を非表示
    }

    if( document . Form1 . frmBlood . value == "" ){ // 血液型が未選択の場合
        flag = 1;
        document . getElementById( 'noticeBlood' ) .classList.add('caution');// 注意文を表示
    }else{ // 名前が入力済みの場合
        document . getElementById( 'noticeBlood' ).classList.remove('caution'); // 注意文を非表示
    }

    if( document . Form1 . frmTall . value == "" ){ // 身長が未選択の場合
        flag = 1;
        document . getElementById( 'noticeTall' ) .classList.add('caution');// 注意文を表示
    }else{ // 名前が入力済みの場合
        document . getElementById( 'noticeTall' ).classList.remove('caution'); // 注意文を非表示
    }

    if( document . Form1 . frmQ1 . value == "" ){ // 質問１が未回答の場合
        flag = 1;
        document . getElementById( 'noticeQ1' ) .classList.add('caution');// 注意文を表示
    }else{ // 名前が入力済みの場合
        document . getElementById( 'noticeQ1' ).classList.remove('caution'); // 注意文を非表示
    }

    if( document . Form1 . frmQ2 . value == "" ){ // 質問２が未回答の場合
        flag = 1;
        document . getElementById( 'noticeQ2' ) .classList.add('caution');// 注意文を表示
    }else{ // 名前が入力済みの場合
        document . getElementById( 'noticeQ2' ).classList.remove('caution'); // 注意文を非表示
    }

    if( document . Form1 . frmQ3 . value == "" ){ // 質問３が未回答の場合
        flag = 1;
        document . getElementById( 'noticeQ3' ) .classList.add('caution');// 注意文を表示
    }else{ // 名前が入力済みの場合
        document . getElementById( 'noticeQ3' ).classList.remove('caution'); // 注意文を非表示
    }
    if(document . Form1 . frmQ3 . value.match(/[^0-9]+/) ){ // 質問３が数字以外の場合
        flag = 1;
        document . getElementById( 'noticeQ3number' ) .classList.add('caution');// 注意文を表示
    }else{ // 名前が入力済みの場合
        document . getElementById( 'noticeQ3number' ).classList.remove('caution'); // 注意文を非表示
    }
    if(flag == 1){ // 入力必須項目に未入力があった場合
        window . alert( '項目を全て入力して下さい。' ); // アラートを表示
        return false; // 送信中止
    }else{ // 入力必須項目が全て入力済みだった場合
        return true; // 送信実行
    }

}
