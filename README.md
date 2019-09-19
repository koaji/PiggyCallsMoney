# PCM-server

## 伝言板
- 2019/09/18 このファイルについて  
リポジトリの概要等についてまとめたファイルです．  
技術的なことなど，メンバーが知っておくといいことをどんどん追記してもらって構いません．

## リポジトリのクローンについて
GitHubを用いた開発を行います．そのため，Gitの操作ができるソフトをインストールしてください．  
GitHub Desktopというソフトが一番使いやすいかな？

もちろんGitコマンドでもOKです．

Gitの操作以外に，必要なソフトウェア・ファイルは以下の通りです．
ソフトウェア
- vagrant 2.2.5
- virtualbox 6.0.10
- 動作確認用ウェブブラウザ(デバッグ機能が豊富な物が良い(Google Chrome, Firefox等))
- エディタ(お好きな物)

ファイル
- package.box (手渡し配布)
- Vagrantfile (GitHubにあります)
- shered (GitHubにあります)

## フォルダ構造
GitHubフォルダー  
└─shared        　　(サーバ共有フォルダ)  
　　└─contents  　　(サーバプログラム　ここにプログラムを配置)   
　　　　└─test      (動作確認用のプログラムを配置)
　　└─deploy.sh     (サーバへコピーするプログラム) 
└─package.box   　　(サーバのベースデータ)  
└─README.md     　　(このファイル)  
└─sha256sums   　　 (package.boxのハッシュ値)  
└─Vagrantfile  　　 (サーバの設定ファイル)  
└─.ignore     　　  (GitHubにアップロードするファイルの制限)  

## サーバの構築・操作

### 初期設定(初回のみ)
※ Vagrantfileがある場所(このリポジトリのフォルダー内)で操作してください．  
1. 以下のコマンドを実行する．  
` vagrant box add --name ubuntu180403lts_lamp package.box `
2. 以下のコマンドを実行する．  
` vagrant up `
3. ウェブブラウザでアドレス `localhost:8081` にアクセスする．
4. 正しくwebページが表示されれば完了．

### サーバの操作
※ Vagrantfileがある場所(このリポジトリのフォルダー内)で操作してください．  
基本的な操作を以下にまとめておきます．  
　　　起動 : ` vagrant up `  
　　　停止 : ` vagrant halt `  
サーバ接続 : ` vagrant ssh `　　　※コンソール接続  
　　　削除 : ` vagrant destroy `　※サーバのデータが消えます．

### プログラムの設置
サーバ接続し，以下のコマンドを実行してください．  
` ~/shared/deploy.sh `

## その他
わからないことがあれば，slack等で連絡してください．