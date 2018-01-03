<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-style-type" content="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
<title>語尾の魔法</title>
</head>
<body>
<h1>Click, Click, Click...♪</h1>
<div id="main">
<h2>Explain</h2>
<div class="text">
文頭に[*]（半角アスタリスク）を付けた行のみ、語尾をカタカナにして返します。<br />
語尾の判定は【、。！？」】の前となっております。行頭アスタリスクから次の改行までが変換対象。<br />
あまり高度なことはできないので、上手くいかないところは手動補正ください。<br />
<br />
<<textarea cols="40" rows="6">
入力例：
「ようこそマンチキンの国へ、気高い魔術師さま。あなたが東の邪悪な魔女を殺してくれたので、人々は魔女の隷属から解放され、たいへん感謝しています」
　ドロシーはこのあいさつを不思議に思いながら聞きました。いったいぜんたいドロシーが魔術師だなんて、それに東の邪悪な魔女を殺したですって、この小さな女の人は何を言っているのでしょう。ドロシーはずっと遠くの故郷から竜巻で運ばれてきた、純真で無邪気な少女で、今まで決してなにも殺したことはありません。
　どうやら小さな女の人はドロシーの返事を待っているようでしたので、ドロシーはためらいがちに言いました。
「ご親切にありがとう。でもきっと何か誤解されてます。あたしは何も殺してません」
「とはいえ、あなたの家が、殺したのですよ」小さなお婆さんは笑いながら言いました。「だから同じことでしょう、ほら、」家の角を指さして、続けて言いました。「つま先がまだ木材の下から突き出てますよ」
　ドロシーは見ると、ぎょっとして小さく叫び声をあげました。本当に、家を支える大きな横材の角の下から、銀色のつま先がとがった靴を履いた足が二本、突き出ていました。
「あら！　まあ、まあ！」ドロシーはおろおろして両手をにぎりしめ、言いました。「家がこの人の上に落ちちゃったんだわ。どうしましょう」
「どうしようもないわ」小さな女の人は、落ち着きはらって言いました。
</textarea>
</div>
<h2>Form</h2>
<form method="POST" action="form_to.php" style="margin:0px;">
<textarea name="novel" cols="100" rows="15">
ここに変換したいテキストを貼り付けてください。
</textarea>
<br />
<input type="submit" value="魔法にかか～れ" />
</form>
</body>
</html>
