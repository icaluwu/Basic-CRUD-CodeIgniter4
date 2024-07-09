# Basic CRUD CodeIgniter 4

## Motivations
### Indonesia
> Halo semuanya pengguna ***Github***,saya IcalUwU ingin membagikan hasil ***Codingan*** saya
> dari awal pembuatan sampai akhir, kalian boleh menggunakan template CRUD ini untuk tugas,
> pekerjaan, bahan penelitian dan lain-lain secara ***open-source***, jadinya gunakan saja
> asal itu berguna dan bermanfaat,dan saya tidak mengizinkan jika digunakan untuk tindakan
> kejahatan.
>> Penulis icaluwu

### English
> ***Hello all Github users, I want to share my coding results from the beginning to the end,***
> ***you can use this CRUD template for tasks, jobs, research materials and so on open-source,***
> ***it's just to use as it is useful and useful, and I don't allow it to be used for criminal acts.***
>> ***Author icaluwu***

## Requirements
> - XAMPP as localhost
> - VS Code/ Sublime Text as Text Editor
> - Chrome/Edge as Browser
> - PHP +8.2
> - Composer (If you want to code it manually)

## Tree
📦store
 ┣ 📂.git
 ┃ ┣ 📂hooks
 ┃ ┃ ┣ 📜applypatch-msg.sample
 ┃ ┃ ┣ 📜commit-msg.sample
 ┃ ┃ ┣ 📜fsmonitor-watchman.sample
 ┃ ┃ ┣ 📜post-update.sample
 ┃ ┃ ┣ 📜pre-applypatch.sample
 ┃ ┃ ┣ 📜pre-commit.sample
 ┃ ┃ ┣ 📜pre-merge-commit.sample
 ┃ ┃ ┣ 📜pre-push.sample
 ┃ ┃ ┣ 📜pre-rebase.sample
 ┃ ┃ ┣ 📜pre-receive.sample
 ┃ ┃ ┣ 📜prepare-commit-msg.sample
 ┃ ┃ ┣ 📜push-to-checkout.sample
 ┃ ┃ ┣ 📜sendemail-validate.sample
 ┃ ┃ ┗ 📜update.sample
 ┃ ┣ 📂info
 ┃ ┃ ┗ 📜exclude
 ┃ ┣ 📂logs
 ┃ ┃ ┣ 📂refs
 ┃ ┃ ┃ ┣ 📂heads
 ┃ ┃ ┃ ┃ ┗ 📜main
 ┃ ┃ ┃ ┗ 📂remotes
 ┃ ┃ ┃ ┃ ┗ 📂origin
 ┃ ┃ ┃ ┃ ┃ ┗ 📜main
 ┃ ┃ ┗ 📜HEAD
 ┃ ┣ 📂objects
 ┃ ┃ ┣ 📂00
 ┃ ┃ ┃ ┗ 📜56290bc29e19ad31e786c3417ff64b2b7b0b47
 ┃ ┃ ┣ 📂02
 ┃ ┃ ┃ ┗ 📜6953612f0befa15df58a27d9615cf3b3411b77
 ┃ ┃ ┣ 📂03
 ┃ ┃ ┃ ┗ 📜90cb1d2974c4a48ae58ab3c821aa837af0fe23
 ┃ ┃ ┣ 📂06
 ┃ ┃ ┃ ┣ 📜12edb715474c7286fcaf9acae7dce219b2e660
 ┃ ┃ ┃ ┗ 📜862a1442eccb458ba0a5111e020bfc81da5fd5
 ┃ ┃ ┣ 📂08
 ┃ ┃ ┃ ┗ 📜58b9bbb25783c76bccd934af25876a429bcc83
 ┃ ┃ ┣ 📂0c
 ┃ ┃ ┃ ┣ 📜0e28a7927e4b687a50adadac72cfdf7eee8361
 ┃ ┃ ┃ ┣ 📜6ea6042fdd7bee0ea925d2bca64c42e08d2367
 ┃ ┃ ┃ ┗ 📜70a618514440677c5477859f7c074be232f557
 ┃ ┃ ┣ 📂14
 ┃ ┃ ┃ ┗ 📜8e7f737ff622d5d570f126f317896a50935aa3
 ┃ ┃ ┣ 📂18
 ┃ ┃ ┃ ┗ 📜22cf583f8226c947302b340a1fb38c12b2496d
 ┃ ┃ ┣ 📂1d
 ┃ ┃ ┃ ┗ 📜ec8b9b3a4015310a5d069a02589f29f3cc6658
 ┃ ┃ ┣ 📂1e
 ┃ ┃ ┃ ┗ 📜da0bdf5053e884c45c02c8789e8aa0ec856c46
 ┃ ┃ ┣ 📂20
 ┃ ┃ ┃ ┗ 📜cc7f93ee54c992332a3d589468e478dd4a0f3e
 ┃ ┃ ┣ 📂24
 ┃ ┃ ┃ ┗ 📜74a7a5979dd8eff325de0235cd94a7c581b657
 ┃ ┃ ┣ 📂25
 ┃ ┃ ┃ ┣ 📜1c6bca01d5a4ecf8a51fd176e785422f259fd3
 ┃ ┃ ┃ ┗ 📜f229b0cec50dce07c5375db474bef854ddb312
 ┃ ┃ ┣ 📂28
 ┃ ┃ ┃ ┣ 📜344134aa311ec57d91dfaeac6a0219663f966e
 ┃ ┃ ┃ ┗ 📜43ab81c48547c1741519f08f4e6eed25d3ac71
 ┃ ┃ ┣ 📂29
 ┃ ┃ ┃ ┗ 📜4fb3c39872f6c175e79f615f0ad29d49d830d4
 ┃ ┃ ┣ 📂2a
 ┃ ┃ ┃ ┣ 📜6c8d5c0a505dee6a9d8f0c48ea22e19e196021
 ┃ ┃ ┃ ┗ 📜c41a70dadb43bb774ca32d0c4c5b978252dbe3
 ┃ ┃ ┣ 📂2b
 ┃ ┃ ┃ ┗ 📜4edf6bf60fc3ab194ad8980d477fadeffb24d5
 ┃ ┃ ┣ 📂2f
 ┃ ┃ ┃ ┗ 📜59a8de1bc7b408765d36ea8f27ebd51107606b
 ┃ ┃ ┣ 📂34
 ┃ ┃ ┃ ┣ 📜62048add78cbd6613527fb8aee3cd1d6cc6569
 ┃ ┃ ┃ ┗ 📜c5f50b46c5d9e77643b7a96a828cbd3fefad00
 ┃ ┃ ┣ 📂36
 ┃ ┃ ┃ ┣ 📜50bbe1a4ff5f0c5ac9dc06c574eff29f632f7b
 ┃ ┃ ┃ ┗ 📜bef4d51b7985f6ec6a4b59448cbcdf9871fccf
 ┃ ┃ ┣ 📂3c
 ┃ ┃ ┃ ┗ 📜37095ec7140ae4b5ca65956808e603bcb4acc0
 ┃ ┃ ┣ 📂3d
 ┃ ┃ ┃ ┣ 📜c89a8f4b9c4ce202099c352974823896a2789e
 ┃ ┃ ┃ ┗ 📜e98d7a95d7c1663c39a120aeaf73aa61b3a3d2
 ┃ ┃ ┣ 📂3f
 ┃ ┃ ┃ ┗ 📜bade6840cc4712b31525c35c250d385b58874e
 ┃ ┃ ┣ 📂40
 ┃ ┃ ┃ ┣ 📜b6ca83cf3f640893c76c54c15788813d90f324
 ┃ ┃ ┃ ┗ 📜d057acbe2261e6e7f760a725437c1863069495
 ┃ ┃ ┣ 📂42
 ┃ ┃ ┃ ┗ 📜fe30bf98ff67a2246fbbbe498203b77179cab2
 ┃ ┃ ┣ 📂44
 ┃ ┃ ┃ ┣ 📜5102d4b27138c1173f9c51519bb29d7eb323b7
 ┃ ┃ ┃ ┗ 📜d74989247384880c9c1b4dbc6d764860abeb67
 ┃ ┃ ┣ 📂45
 ┃ ┃ ┃ ┗ 📜6ea3e897a1cc46f501b506ee21e6e417b5b212
 ┃ ┃ ┣ 📂46
 ┃ ┃ ┃ ┗ 📜f23df796125eb818f247a7c3a4136eb42dd2c9
 ┃ ┃ ┣ 📂47
 ┃ ┃ ┃ ┗ 📜b92f832935690e1dddfe622455c2b9a87ce180
 ┃ ┃ ┣ 📂4c
 ┃ ┃ ┃ ┗ 📜f248a9ed75d4a2912b708296aa8d1b5bac237c
 ┃ ┃ ┣ 📂4d
 ┃ ┃ ┃ ┗ 📜ce650b32ec66d6f566fb2c209c2264467b0312
 ┃ ┃ ┣ 📂4e
 ┃ ┃ ┃ ┗ 📜3396346b80ea9aff32ef8e74888559fd6a5c8b
 ┃ ┃ ┣ 📂50
 ┃ ┃ ┃ ┗ 📜244edecc0728c89dd0b2fee72eea273c0d87cd
 ┃ ┃ ┣ 📂51
 ┃ ┃ ┃ ┗ 📜e4fc0e33706a7dabc8521d63d42f840fb1034e
 ┃ ┃ ┣ 📂52
 ┃ ┃ ┃ ┗ 📜6952de11d161994dd0fc32217d63d68062f4c3
 ┃ ┃ ┣ 📂54
 ┃ ┃ ┃ ┗ 📜d1e7a4a27d1a86c4df05e9a0457b83d4cffe86
 ┃ ┃ ┣ 📂55
 ┃ ┃ ┃ ┣ 📜4f86bfc9b47c25ed9767c8f5d9ccf95947f3dc
 ┃ ┃ ┃ ┗ 📜bd508986af7dc060f978d6c940a0c816f29659
 ┃ ┃ ┣ 📂56
 ┃ ┃ ┃ ┣ 📜1086ec436eb48cc104c136d9d05ffa8a369fac
 ┃ ┃ ┃ ┗ 📜1b832b52a44695886dbf4e6303ae77f854e4c5
 ┃ ┃ ┣ 📂59
 ┃ ┃ ┃ ┗ 📜343333099a7dcb73a11582de77f78b00e6c5c7
 ┃ ┃ ┣ 📂5a
 ┃ ┃ ┃ ┣ 📜3d4e9311b246c315ea63cf58dabf80c0d53607
 ┃ ┃ ┃ ┗ 📜3e5045d1e2e6bd6c174443e9656b90391183b2
 ┃ ┃ ┣ 📂5e
 ┃ ┃ ┃ ┗ 📜c58a7729c34ee90ea970fd8c35996e8117b0d4
 ┃ ┃ ┣ 📂61
 ┃ ┃ ┃ ┗ 📜9fc27a72925234c37ba306f103a6025b249bda
 ┃ ┃ ┣ 📂62
 ┃ ┃ ┃ ┗ 📜6b7aebeaa4812bf4399ba21cb9b6bc6574b669
 ┃ ┃ ┣ 📂63
 ┃ ┃ ┃ ┗ 📜42dbbe7d38c17366268c7b852ecd61bb09794b
 ┃ ┃ ┣ 📂65
 ┃ ┃ ┃ ┣ 📜00d6f232f03f733b70781808876c428a5b15fe
 ┃ ┃ ┃ ┗ 📜67f4eabd66ed1f44577354aedae56c76ba3deb
 ┃ ┃ ┣ 📂66
 ┃ ┃ ┃ ┗ 📜ce24fd63d7f59c51c0735fa0ec3cd63af386ca
 ┃ ┃ ┣ 📂67
 ┃ ┃ ┃ ┣ 📜6a1a2d869c541c783449687defb62d1253fd02
 ┃ ┃ ┃ ┗ 📜ebcb0ee74cfa8eef727870530d01924c555c4b
 ┃ ┃ ┣ 📂69
 ┃ ┃ ┃ ┣ 📜44710f705bea5bbfcb92355b6a1c0bde03cd04
 ┃ ┃ ┃ ┗ 📜df4e1dff6881a3d0f51b9e0d5c04064d06e255
 ┃ ┃ ┣ 📂6a
 ┃ ┃ ┃ ┣ 📜050c8bb46206082ea28ed809834cddb9929673
 ┃ ┃ ┃ ┣ 📜da0c56996d0efd6134c3f19cdf612456424db2
 ┃ ┃ ┃ ┗ 📜dd0b0c48fb47afb1d61790cb0e0fd985e8ce58
 ┃ ┃ ┣ 📂6e
 ┃ ┃ ┃ ┗ 📜ee31aa27128e036004bb55014b55d9aa651972
 ┃ ┃ ┣ 📂6f
 ┃ ┃ ┃ ┗ 📜b441fd2288e91cfd553bd4d6ee3a2c0e626d19
 ┃ ┃ ┣ 📂72
 ┃ ┃ ┃ ┗ 📜3faba9b01dcc02f09e668398b3975850cfb651
 ┃ ┃ ┣ 📂74
 ┃ ┃ ┃ ┗ 📜06b825ed0ced82b59872586dbd6d37aa452325
 ┃ ┃ ┣ 📂75
 ┃ ┃ ┃ ┗ 📜d86f5cf57232fbd93435e0e8de2e65a2e379e2
 ┃ ┃ ┣ 📂76
 ┃ ┃ ┃ ┗ 📜cd9263556e53cb5a7f55a736366437d752c268
 ┃ ┃ ┣ 📂77
 ┃ ┃ ┃ ┗ 📜22444abe7b0f4c074724251066ea723c2a91a5
 ┃ ┃ ┣ 📂78
 ┃ ┃ ┃ ┣ 📜aaf2914078661ba1890a4ef1599b32a644a3eb
 ┃ ┃ ┃ ┗ 📜c29cd6199b249cca2b3d2b687383b7ec227071
 ┃ ┃ ┣ 📂7a
 ┃ ┃ ┃ ┣ 📜1fd21e8d102e851eaa83e286ddabb6b10db91c
 ┃ ┃ ┃ ┣ 📜badc7b76f0ee0ec43de720419aeadb7f654de2
 ┃ ┃ ┃ ┗ 📜d5097224c91a81cd04165de6f09621954eef27
 ┃ ┃ ┣ 📂7b
 ┃ ┃ ┃ ┗ 📜62f739ce270bafe797849ea90fab59338e8dd4
 ┃ ┃ ┣ 📂7d
 ┃ ┃ ┃ ┗ 📜b744ecea99622f6e63dfbb934cdfd0236e57d5
 ┃ ┃ ┣ 📂7e
 ┃ ┃ ┃ ┣ 📜8aaacf09ddc983697f9ec9b34c5dcf2eb9c7df
 ┃ ┃ ┃ ┣ 📜8dc3b19b5ee0b6941d82decf65419d61dc4929
 ┃ ┃ ┃ ┣ 📜9bb17807bde3d91c072ad98fc2860b062ce9bb
 ┃ ┃ ┃ ┗ 📜cfce214cbdbedc15d8348babeff5cd7e720488
 ┃ ┃ ┣ 📂7f
 ┃ ┃ ┃ ┗ 📜5cf034bfe6ac293b3c5becdeb698eda7dae5e6
 ┃ ┃ ┣ 📂80
 ┃ ┃ ┃ ┣ 📜71bd3d07f88ff04c0a30fc85a49b4212b28960
 ┃ ┃ ┃ ┗ 📜88419e3ad0e0bde36571c5c2b29bb08d0f132a
 ┃ ┃ ┣ 📂82
 ┃ ┃ ┃ ┗ 📜3c7dd75c96a01f88b96048244e8f39379d235d
 ┃ ┃ ┣ 📂84
 ┃ ┃ ┃ ┣ 📜3095b40a90bcfc8b725be2c21630dbaadf3ad3
 ┃ ┃ ┃ ┗ 📜ccc0e99d80b1e0534125ffee66d93baae1fff8
 ┃ ┃ ┣ 📂85
 ┃ ┃ ┃ ┣ 📜1b770662766285010be3d1f6f4c62652a1863e
 ┃ ┃ ┃ ┗ 📜bdbfeb3397bf4ba7f7dcc0a29fd13f8d7f31d0
 ┃ ┃ ┣ 📂89
 ┃ ┃ ┃ ┗ 📜e6925b3c8bdc24102a9a56b2376d91de1320c5
 ┃ ┃ ┣ 📂8b
 ┃ ┃ ┃ ┗ 📜435dab7056341d1dad44203c1ec380429efefa
 ┃ ┃ ┣ 📂8d
 ┃ ┃ ┃ ┣ 📜4bf56544b0da7e5131d2c92fb588e0a2cda353
 ┃ ┃ ┃ ┗ 📜758ad06f6bbd7f803885432f54a1afd3ed877a
 ┃ ┃ ┣ 📂8f
 ┃ ┃ ┃ ┗ 📜a5280ee60b2bab490896b23c2a04a022bb23cc
 ┃ ┃ ┣ 📂90
 ┃ ┃ ┃ ┣ 📜6c150d65f0db75cee455748ff56dfda0682d9e
 ┃ ┃ ┃ ┣ 📜858be13011c94136da5c8a87f7df1e12281984
 ┃ ┃ ┃ ┗ 📜fed9a190ccb262d4fb80c0ef22a52e0771a027
 ┃ ┃ ┣ 📂92
 ┃ ┃ ┃ ┗ 📜b12bb42ddbfb6db42526678ec65e77f05feb18
 ┃ ┃ ┣ 📂93
 ┃ ┃ ┃ ┣ 📜42771ffe6d4a0df8e9f2839a12a22c3b21b803
 ┃ ┃ ┃ ┗ 📜b23ac6702b2e77ee8116e53b77cd9b77849c00
 ┃ ┃ ┣ 📂95
 ┃ ┃ ┃ ┣ 📜920e6147684da4361e55cfbbff3ec5e7a7b8c5
 ┃ ┃ ┃ ┣ 📜b6af90c8b655f31aa59b3e471a8db0cc8d13a9
 ┃ ┃ ┃ ┗ 📜f55442523605b13cddf7e3292a7862814f77e1
 ┃ ┃ ┣ 📂96
 ┃ ┃ ┃ ┗ 📜18055acad527630a3b6bb91646e5e1d63c7b02
 ┃ ┃ ┣ 📂97
 ┃ ┃ ┃ ┗ 📜a8dbe47e08dff96b1f649d93b2f749c4b1c656
 ┃ ┃ ┣ 📂99
 ┃ ┃ ┃ ┣ 📜199cac872c3a882de2296d33a98ece7f3d840b
 ┃ ┃ ┃ ┣ 📜2d044c9ee2b2cef9cd0c1ca47d34990154639e
 ┃ ┃ ┃ ┗ 📜3abd24ebc7624f4b401faafe1c359b8627f69c
 ┃ ┃ ┣ 📂9e
 ┃ ┃ ┃ ┗ 📜60f970fbd025612caecdc947f7a67ceb24d511
 ┃ ┃ ┣ 📂9f
 ┃ ┃ ┃ ┗ 📜47d25141d2eea67493a4281df80c891208bbbe
 ┃ ┃ ┣ 📂a0
 ┃ ┃ ┃ ┗ 📜acc91898a6255c07dabbb7e8f581de8da924cf
 ┃ ┃ ┣ 📂a3
 ┃ ┃ ┃ ┣ 📜3ddadb9a5c08a39ad6f19e6a3ba7611fde02a7
 ┃ ┃ ┃ ┗ 📜460c7374c766d8e96414d7c06f97dab3641b0b
 ┃ ┃ ┣ 📂a7
 ┃ ┃ ┃ ┗ 📜3356d3479ad05ac7130b5233f71e6dd8a6c4d8
 ┃ ┃ ┣ 📂a8
 ┃ ┃ ┃ ┣ 📜68447a8e37b75ccab1f4963ff68d5607eb5877
 ┃ ┃ ┃ ┗ 📜f0d54f45f6e10a565db4a358681a47601d942a
 ┃ ┃ ┣ 📂ab
 ┃ ┃ ┃ ┣ 📜6997e52fb9e2961e9d18a900eb4eb365671b8c
 ┃ ┃ ┃ ┗ 📜ac3cb6b949e5fb4b65ba32a270d80866ee76b8
 ┃ ┃ ┣ 📂af
 ┃ ┃ ┃ ┗ 📜370ee398bdcd77a8277b76f23d404b8bac071c
 ┃ ┃ ┣ 📂b0
 ┃ ┃ ┃ ┣ 📜90738f9c94f1654b344e5bd06e4e50f4ebc6f0
 ┃ ┃ ┃ ┣ 📜94556755e9970fc87880d3b6ccbea2c89290a6
 ┃ ┃ ┃ ┗ 📜f523a7e2f29818ffaabe4f76e68c2dbbfa7d2f
 ┃ ┃ ┣ 📂b1
 ┃ ┃ ┃ ┣ 📜410accb14267df3cd5de96e733766c673506ed
 ┃ ┃ ┃ ┣ 📜c44981d549f4743c5837a5bf66550f0adf49c9
 ┃ ┃ ┃ ┗ 📜fabaa94d19676b760a4d00edf48383cd609d4e
 ┃ ┃ ┣ 📂b4
 ┃ ┃ ┃ ┗ 📜08a99d988c66aa2c39a5ea1d26e4e94822d297
 ┃ ┃ ┣ 📂b6
 ┃ ┃ ┃ ┗ 📜a83616daf537020800c4e6ab6650802af761bc
 ┃ ┃ ┣ 📂b7
 ┃ ┃ ┃ ┣ 📜02fbc3967b4f49eddb394723822973f2f80fb4
 ┃ ┃ ┃ ┗ 📜61da772ad10a50fd5d597e059e7773ea434405
 ┃ ┃ ┣ 📂b8
 ┃ ┃ ┃ ┗ 📜4684d82a4f731b09bb11f4214fea96686d8fbf
 ┃ ┃ ┣ 📂b9
 ┃ ┃ ┃ ┗ 📜5c58a203c96689f8bf8852d2e8233c43054376
 ┃ ┃ ┣ 📂bb
 ┃ ┃ ┃ ┗ 📜ba55b2d589b0de19ebfe9f8c05e41c99d49a29
 ┃ ┃ ┣ 📂bd
 ┃ ┃ ┃ ┗ 📜369e481b046669a88664db34a0d20494694e39
 ┃ ┃ ┣ 📂be
 ┃ ┃ ┃ ┗ 📜b59a16ae74cf3c5e96bbfc98804dca4941f810
 ┃ ┃ ┣ 📂bf
 ┃ ┃ ┃ ┗ 📜03be1db7e094c97544098456f9ae22cefcdc85
 ┃ ┃ ┣ 📂c0
 ┃ ┃ ┃ ┣ 📜07560a557b0dbc8482ce1970bef724a353e7de
 ┃ ┃ ┃ ┣ 📜a873f74041a24cb0a0db7049d2fc0c70bce04c
 ┃ ┃ ┃ ┣ 📜c6339d7e2e4f56f81f70e4c9899a2fdddbb28f
 ┃ ┃ ┃ ┗ 📜fc342afae1a782cf68338a6f1510591efe693f
 ┃ ┃ ┣ 📂c1
 ┃ ┃ ┃ ┗ 📜8eca3c9ed3fffb7a7bf8f5e02b7d333a5feae0
 ┃ ┃ ┣ 📂c2
 ┃ ┃ ┃ ┗ 📜666de09d70d9afc6f4898c2680d74ea045fd04
 ┃ ┃ ┣ 📂c3
 ┃ ┃ ┃ ┗ 📜fda7811a92b96e8ecaaca044803b7203b848ab
 ┃ ┃ ┣ 📂c5
 ┃ ┃ ┃ ┗ 📜a8897cfdb558b291a9310f7da4b50e3f09d6f8
 ┃ ┃ ┣ 📂c7
 ┃ ┃ ┃ ┗ 📜6ae42c9a34225edc865b9e532eb6168f951d16
 ┃ ┃ ┣ 📂cc
 ┃ ┃ ┃ ┣ 📜2ca0851ac774fe6c48458503bf811de92bd8c0
 ┃ ┃ ┃ ┗ 📜92c7aa432f5a8ff247fb2778b55501304cd1d9
 ┃ ┃ ┣ 📂cf
 ┃ ┃ ┃ ┣ 📜8dd06f1065b8686bacfcf093ae17062262fc67
 ┃ ┃ ┃ ┣ 📜93f660006365d4051ef5801860f6d42657fd77
 ┃ ┃ ┃ ┗ 📜a7ffc432682a45f44a8364233ad1adb86f408f
 ┃ ┃ ┣ 📂d0
 ┃ ┃ ┃ ┣ 📜035fbcfb9b5b478b673d2af6d590fd0524f64d
 ┃ ┃ ┃ ┣ 📜7078270145736310bb2ca93867644e930839ee
 ┃ ┃ ┃ ┗ 📜9cba5795b827e40cb8dfe728ceda2860857c7a
 ┃ ┃ ┣ 📂d1
 ┃ ┃ ┃ ┗ 📜4b4c9c804c556f050682f858c4699928c4bdc2
 ┃ ┃ ┣ 📂d2
 ┃ ┃ ┃ ┗ 📜28003f6f8dbaa5f50ba6ee5eae3375ca3d7169
 ┃ ┃ ┣ 📂d3
 ┃ ┃ ┃ ┗ 📜665392a594f2e8e2cdfc5239b60d7b165a4c11
 ┃ ┃ ┣ 📂d5
 ┃ ┃ ┃ ┗ 📜64d0bc3dd917926892c55e3706cc116d5b165e
 ┃ ┃ ┣ 📂d6
 ┃ ┃ ┃ ┗ 📜c3bb9e51872fc1df60f5cf5f626e8c124ce06b
 ┃ ┃ ┣ 📂df
 ┃ ┃ ┃ ┣ 📜7c8ad086004822ce2c0da50d0c45bd8670a554
 ┃ ┃ ┃ ┗ 📜c45d97e6f62df4bb5a1193245e660523d5386d
 ┃ ┃ ┣ 📂e1
 ┃ ┃ ┃ ┗ 📜6f10841fc7c0d8e2bd2ac47f52dd9bcaa2b8e8
 ┃ ┃ ┣ 📂e3
 ┃ ┃ ┃ ┣ 📜41f4d35430a638e756b516ab840f49fc38d380
 ┃ ┃ ┃ ┗ 📜87e11a185b89ff3b896bfbf53470c145e0fa12
 ┃ ┃ ┣ 📂e4
 ┃ ┃ ┃ ┗ 📜d3f86e5451048cf7054e4002fd9f94ff45466e
 ┃ ┃ ┣ 📂e5
 ┃ ┃ ┃ ┗ 📜06f08350e7d75d017ff2eb890ecd66a3702cab
 ┃ ┃ ┣ 📂e6
 ┃ ┃ ┃ ┣ 📜9de29bb2d1d6434b8b29ae775ad8c2e48c5391
 ┃ ┃ ┃ ┗ 📜fd8517a471866987d9e3418aac31f1f21ed939
 ┃ ┃ ┣ 📂e7
 ┃ ┃ ┃ ┗ 📜619117c9963785a62c58eb2ce43130f7ad270d
 ┃ ┃ ┣ 📂e8
 ┃ ┃ ┃ ┗ 📜4ad75234d6c80e7b0c410b946da177a2034c50
 ┃ ┃ ┣ 📂e9
 ┃ ┃ ┃ ┗ 📜feeab8960c7b8091a4df76d87ec55de5fb689c
 ┃ ┃ ┣ 📂eb
 ┃ ┃ ┃ ┣ 📜46a1d7cee8258f9c3516abcd709b6defe3c49d
 ┃ ┃ ┃ ┗ 📜cb650427ab591b920ba7f8b9e4fae650115f66
 ┃ ┃ ┣ 📂ed
 ┃ ┃ ┃ ┗ 📜86ff0383afd712e0051f3824c2a93c085b3187
 ┃ ┃ ┣ 📂ef
 ┃ ┃ ┃ ┗ 📜d4a0b20ae85de42a28dae1f102973aaf53fe49
 ┃ ┃ ┣ 📂f0
 ┃ ┃ ┃ ┣ 📜687e9b198581eaada4141697275ce5ff497fea
 ┃ ┃ ┃ ┗ 📜8879f3199a0d70b5045b6cd282e9d9773353f7
 ┃ ┃ ┣ 📂f1
 ┃ ┃ ┃ ┗ 📜a95725c5c7b23c0f002683260c62d8e2abf9c3
 ┃ ┃ ┣ 📂f2
 ┃ ┃ ┃ ┗ 📜b2809bbf86c6762e1a8b16cd0341c8e6acd2e6
 ┃ ┃ ┣ 📂f8
 ┃ ┃ ┃ ┣ 📜162ee9a4550a512f5a09ec727ccb7b23515ce1
 ┃ ┃ ┃ ┗ 📜c916f40de2338c32a49539fc4a50312a5f0ea4
 ┃ ┃ ┣ 📂fb
 ┃ ┃ ┃ ┗ 📜790e2e44b3fba899ec71412a1a33a24f239d6d
 ┃ ┃ ┣ 📂fc
 ┃ ┃ ┃ ┣ 📜40e447301ec1eeaabbf8e609fee5ec30457c45
 ┃ ┃ ┃ ┗ 📜4914a6923b2a3a144584240849b57b2234aebf
 ┃ ┃ ┣ 📂fd
 ┃ ┃ ┃ ┗ 📜a73748dbe8b5db4fdc212f811423df71e37ede
 ┃ ┃ ┣ 📂ff
 ┃ ┃ ┃ ┣ 📜222b2ac61d9a978ff072bb6f475009b0491e9d
 ┃ ┃ ┃ ┗ 📜7ffc8e637de96cdf6cee51d79b2c7619e4f463
 ┃ ┃ ┣ 📂info
 ┃ ┃ ┗ 📂pack
 ┃ ┣ 📂refs
 ┃ ┃ ┣ 📂heads
 ┃ ┃ ┃ ┗ 📜main
 ┃ ┃ ┣ 📂remotes
 ┃ ┃ ┃ ┗ 📂origin
 ┃ ┃ ┃ ┃ ┗ 📜main
 ┃ ┃ ┗ 📂tags
 ┃ ┣ 📜COMMIT_EDITMSG
 ┃ ┣ 📜config
 ┃ ┣ 📜description
 ┃ ┣ 📜HEAD
 ┃ ┗ 📜index
 ┣ 📂app
 ┃ ┣ 📂Config
 ┃ ┃ ┣ 📂Boot
 ┃ ┃ ┃ ┣ 📜development.php
 ┃ ┃ ┃ ┣ 📜production.php
 ┃ ┃ ┃ ┗ 📜testing.php
 ┃ ┃ ┣ 📜App.php
 ┃ ┃ ┣ 📜Autoload.php
 ┃ ┃ ┣ 📜Cache.php
 ┃ ┃ ┣ 📜Constants.php
 ┃ ┃ ┣ 📜ContentSecurityPolicy.php
 ┃ ┃ ┣ 📜Cookie.php
 ┃ ┃ ┣ 📜Cors.php
 ┃ ┃ ┣ 📜CURLRequest.php
 ┃ ┃ ┣ 📜Database.php
 ┃ ┃ ┣ 📜DocTypes.php
 ┃ ┃ ┣ 📜Email.php
 ┃ ┃ ┣ 📜Encryption.php
 ┃ ┃ ┣ 📜Events.php
 ┃ ┃ ┣ 📜Exceptions.php
 ┃ ┃ ┣ 📜Feature.php
 ┃ ┃ ┣ 📜Filters.php
 ┃ ┃ ┣ 📜ForeignCharacters.php
 ┃ ┃ ┣ 📜Format.php
 ┃ ┃ ┣ 📜Generators.php
 ┃ ┃ ┣ 📜Honeypot.php
 ┃ ┃ ┣ 📜Images.php
 ┃ ┃ ┣ 📜Kint.php
 ┃ ┃ ┣ 📜Logger.php
 ┃ ┃ ┣ 📜Migrations.php
 ┃ ┃ ┣ 📜Mimes.php
 ┃ ┃ ┣ 📜Modules.php
 ┃ ┃ ┣ 📜Optimize.php
 ┃ ┃ ┣ 📜Pager.php
 ┃ ┃ ┣ 📜Paths.php
 ┃ ┃ ┣ 📜Publisher.php
 ┃ ┃ ┣ 📜Routes.php
 ┃ ┃ ┣ 📜Routing.php
 ┃ ┃ ┣ 📜Security.php
 ┃ ┃ ┣ 📜Services.php
 ┃ ┃ ┣ 📜Session.php
 ┃ ┃ ┣ 📜Toolbar.php
 ┃ ┃ ┣ 📜UserAgents.php
 ┃ ┃ ┣ 📜Validation.php
 ┃ ┃ ┗ 📜View.php
 ┃ ┣ 📂Controllers
 ┃ ┃ ┣ 📜BaseController.php
 ┃ ┃ ┣ 📜Home.php
 ┃ ┃ ┗ 📜Item.php
 ┃ ┣ 📂Database
 ┃ ┃ ┣ 📂Migrations
 ┃ ┃ ┃ ┗ 📜.gitkeep
 ┃ ┃ ┗ 📂Seeds
 ┃ ┃ ┃ ┗ 📜.gitkeep
 ┃ ┣ 📂Filters
 ┃ ┃ ┗ 📜.gitkeep
 ┃ ┣ 📂Helpers
 ┃ ┃ ┗ 📜.gitkeep
 ┃ ┣ 📂Language
 ┃ ┃ ┣ 📂en
 ┃ ┃ ┃ ┗ 📜Validation.php
 ┃ ┃ ┗ 📜.gitkeep
 ┃ ┣ 📂Libraries
 ┃ ┃ ┗ 📜.gitkeep
 ┃ ┣ 📂Models
 ┃ ┃ ┣ 📜.gitkeep
 ┃ ┃ ┗ 📜ItemModel.php
 ┃ ┣ 📂ThirdParty
 ┃ ┃ ┗ 📜.gitkeep
 ┃ ┣ 📂Views
 ┃ ┃ ┣ 📂errors
 ┃ ┃ ┃ ┣ 📂cli
 ┃ ┃ ┃ ┃ ┣ 📜error_404.php
 ┃ ┃ ┃ ┃ ┣ 📜error_exception.php
 ┃ ┃ ┃ ┃ ┗ 📜production.php
 ┃ ┃ ┃ ┗ 📂html
 ┃ ┃ ┃ ┃ ┣ 📜debug.css
 ┃ ┃ ┃ ┃ ┣ 📜debug.js
 ┃ ┃ ┃ ┃ ┣ 📜error_404.php
 ┃ ┃ ┃ ┃ ┣ 📜error_exception.php
 ┃ ┃ ┃ ┃ ┗ 📜production.php
 ┃ ┃ ┣ 📜add_view.php
 ┃ ┃ ┣ 📜edit_view.php
 ┃ ┃ ┣ 📜footer_view.php
 ┃ ┃ ┣ 📜header_view.php
 ┃ ┃ ┣ 📜item_view.php
 ┃ ┃ ┗ 📜welcome_message.php
 ┃ ┣ 📜.htaccess
 ┃ ┣ 📜Common.php
 ┃ ┗ 📜index.html
 ┣ 📂assets
 ┃ ┗ 📜git_border.png
 ┣ 📂public
 ┃ ┣ 📜.htaccess
 ┃ ┣ 📜favicon.ico
 ┃ ┣ 📜index.php
 ┃ ┗ 📜robots.txt
 ┣ 📂tests
 ┃ ┣ 📂database
 ┃ ┃ ┗ 📜ExampleDatabaseTest.php
 ┃ ┣ 📂session
 ┃ ┃ ┗ 📜ExampleSessionTest.php
 ┃ ┣ 📂unit
 ┃ ┃ ┗ 📜HealthTest.php
 ┃ ┣ 📂_support
 ┃ ┃ ┣ 📂Database
 ┃ ┃ ┃ ┣ 📂Migrations
 ┃ ┃ ┃ ┃ ┗ 📜2020-02-22-222222_example_migration.php
 ┃ ┃ ┃ ┗ 📂Seeds
 ┃ ┃ ┃ ┃ ┗ 📜ExampleSeeder.php
 ┃ ┃ ┣ 📂Libraries
 ┃ ┃ ┃ ┗ 📜ConfigReader.php
 ┃ ┃ ┗ 📂Models
 ┃ ┃ ┃ ┗ 📜ExampleModel.php
 ┃ ┣ 📜.htaccess
 ┃ ┣ 📜index.html
 ┃ ┗ 📜README.md
 ┣ 📂vendor
 ┃ ┣ 📂codeigniter4
 ┃ ┃ ┗ 📂framework
 ┃ ┃ ┃ ┣ 📂app
 ┃ ┃ ┃ ┃ ┣ 📂Config
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Boot
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜development.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜production.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜testing.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜App.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Autoload.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Cache.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Constants.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ContentSecurityPolicy.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Cookie.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Cors.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜CURLRequest.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Database.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜DocTypes.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Email.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Encryption.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Events.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Exceptions.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Feature.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Filters.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ForeignCharacters.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Format.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Generators.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Honeypot.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Images.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Kint.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Logger.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Migrations.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Mimes.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Modules.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Optimize.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Pager.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Paths.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Publisher.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Routes.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Routing.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Security.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Services.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Session.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Toolbar.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜UserAgents.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Validation.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜View.php
 ┃ ┃ ┃ ┃ ┣ 📂Controllers
 ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseController.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜Home.php
 ┃ ┃ ┃ ┃ ┣ 📂Database
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Migrations
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜.gitkeep
 ┃ ┃ ┃ ┃ ┃ ┗ 📂Seeds
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜.gitkeep
 ┃ ┃ ┃ ┃ ┣ 📂Filters
 ┃ ┃ ┃ ┃ ┃ ┗ 📜.gitkeep
 ┃ ┃ ┃ ┃ ┣ 📂Helpers
 ┃ ┃ ┃ ┃ ┃ ┗ 📜.gitkeep
 ┃ ┃ ┃ ┃ ┣ 📂Language
 ┃ ┃ ┃ ┃ ┃ ┣ 📂en
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Validation.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜.gitkeep
 ┃ ┃ ┃ ┃ ┣ 📂Libraries
 ┃ ┃ ┃ ┃ ┃ ┗ 📜.gitkeep
 ┃ ┃ ┃ ┃ ┣ 📂Models
 ┃ ┃ ┃ ┃ ┃ ┗ 📜.gitkeep
 ┃ ┃ ┃ ┃ ┣ 📂ThirdParty
 ┃ ┃ ┃ ┃ ┃ ┗ 📜.gitkeep
 ┃ ┃ ┃ ┃ ┣ 📂Views
 ┃ ┃ ┃ ┃ ┃ ┣ 📂errors
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂cli
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜error_404.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜error_exception.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜production.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📂html
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜debug.css
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜debug.js
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜error_404.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜error_exception.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜production.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜welcome_message.php
 ┃ ┃ ┃ ┃ ┣ 📜.htaccess
 ┃ ┃ ┃ ┃ ┣ 📜Common.php
 ┃ ┃ ┃ ┃ ┗ 📜index.html
 ┃ ┃ ┃ ┣ 📂public
 ┃ ┃ ┃ ┃ ┣ 📜.htaccess
 ┃ ┃ ┃ ┃ ┣ 📜favicon.ico
 ┃ ┃ ┃ ┃ ┣ 📜index.php
 ┃ ┃ ┃ ┃ ┗ 📜robots.txt
 ┃ ┃ ┃ ┣ 📂system
 ┃ ┃ ┃ ┃ ┣ 📂API
 ┃ ┃ ┃ ┃ ┃ ┗ 📜ResponseTrait.php
 ┃ ┃ ┃ ┃ ┣ 📂Autoloader
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Autoloader.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜FileLocator.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜FileLocatorCached.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜FileLocatorInterface.php
 ┃ ┃ ┃ ┃ ┣ 📂Cache
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜CacheException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂FactoriesCache
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜FileVarExportHandler.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Handlers
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DummyHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FileHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MemcachedHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PredisHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜RedisHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜WincacheHandler.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜CacheFactory.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜CacheInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜FactoriesCache.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜ResponseCache.php
 ┃ ┃ ┃ ┃ ┣ 📂CLI
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜CLIException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseCommand.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜CLI.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Commands.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Console.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜GeneratorTrait.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜InputOutput.php
 ┃ ┃ ┃ ┃ ┣ 📂Commands
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Cache
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ClearCache.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜InfoCache.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Database
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜CreateDatabase.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Migrate.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MigrateRefresh.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MigrateRollback.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MigrateStatus.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Seed.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜ShowTableInfo.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Encryption
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜GenerateKey.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Generators
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Views
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜cell.tpl.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜cell_view.tpl.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜command.tpl.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜config.tpl.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜controller.tpl.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜entity.tpl.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜filter.tpl.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜migration.tpl.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜model.tpl.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜seeder.tpl.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜test.tpl.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜validation.tpl.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜CellGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜CommandGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ConfigGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ControllerGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜EntityGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FilterGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MigrationGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ModelGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ScaffoldGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜SeederGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜TestGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜ValidationGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Housekeeping
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ClearDebugbar.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜ClearLogs.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Server
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Serve.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Translation
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜LocalizationFinder.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Utilities
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Routes
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂AutoRouterImproved
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜AutoRouteCollector.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜ControllerMethodReader.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜AutoRouteCollector.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ControllerFinder.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ControllerMethodReader.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FilterCollector.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FilterFinder.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜SampleURIGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ConfigCheck.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Environment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FilterCheck.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Namespaces.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Optimize.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhpIniCheck.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Publish.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Routes.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Help.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜ListCommands.php
 ┃ ┃ ┃ ┃ ┣ 📂Config
 ┃ ┃ ┃ ┃ ┃ ┣ 📜AutoloadConfig.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseConfig.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseService.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜DotEnv.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Factories.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Factory.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Filters.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ForeignCharacters.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Publisher.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Routing.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Services.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜View.php
 ┃ ┃ ┃ ┃ ┣ 📂Cookie
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜CookieException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜CloneableCookieInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Cookie.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜CookieInterface.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜CookieStore.php
 ┃ ┃ ┃ ┃ ┣ 📂Database
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DatabaseException.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DataException.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜ExceptionInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂MySQLi
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Builder.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Connection.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Forge.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PreparedQuery.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Result.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Utils.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂OCI8
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Builder.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Connection.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Forge.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PreparedQuery.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Result.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Utils.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Postgre
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Builder.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Connection.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Forge.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PreparedQuery.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Result.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Utils.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂SQLite3
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Builder.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Connection.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Forge.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PreparedQuery.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Result.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Table.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Utils.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂SQLSRV
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Builder.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Connection.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Forge.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PreparedQuery.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Result.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Utils.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseBuilder.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseConnection.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜BasePreparedQuery.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseResult.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseUtils.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Config.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ConnectionInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Database.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Forge.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Migration.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜MigrationRunner.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜PreparedQueryInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Query.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜QueryInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜RawSql.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ResultInterface.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜Seeder.php
 ┃ ┃ ┃ ┃ ┣ 📂DataCaster
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Cast
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ArrayCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BooleanCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜CastInterface.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜CSVCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DatetimeCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FloatCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜IntBoolCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜IntegerCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜JsonCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜TimestampCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜URICast.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜CastException.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜DataCaster.php
 ┃ ┃ ┃ ┃ ┣ 📂DataConverter
 ┃ ┃ ┃ ┃ ┃ ┗ 📜DataConverter.php
 ┃ ┃ ┃ ┃ ┣ 📂Debug
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Toolbar
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Collectors
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseCollector.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Config.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Database.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Events.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Files.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜History.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Logs.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Routes.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Timers.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Views.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📂Views
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜toolbar.css
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜toolbar.js
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜toolbar.tpl.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜toolbarloader.js
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜_config.tpl
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜_database.tpl
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜_events.tpl
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜_files.tpl
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜_history.tpl
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜_logs.tpl
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜_routes.tpl
 ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseExceptionHandler.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ExceptionHandler.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ExceptionHandlerInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Exceptions.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Iterator.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Timer.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜Toolbar.php
 ┃ ┃ ┃ ┃ ┣ 📂Email
 ┃ ┃ ┃ ┃ ┃ ┗ 📜Email.php
 ┃ ┃ ┃ ┃ ┣ 📂Encryption
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜EncryptionException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Handlers
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜OpenSSLHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜SodiumHandler.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜EncrypterInterface.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜Encryption.php
 ┃ ┃ ┃ ┃ ┣ 📂Entity
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Cast
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ArrayCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BooleanCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜CastInterface.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜CSVCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DatetimeCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FloatCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜IntBoolCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜IntegerCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜JsonCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ObjectCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜StringCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜TimestampCast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜URICast.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜CastException.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜Entity.php
 ┃ ┃ ┃ ┃ ┣ 📂Events
 ┃ ┃ ┃ ┃ ┃ ┗ 📜Events.php
 ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ConfigException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜CriticalError.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜DebugTraceableTrait.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜DownloadException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ExceptionInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜FrameworkException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜HasExitCodeInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜HTTPExceptionInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ModelException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜PageNotFoundException.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜TestException.php
 ┃ ┃ ┃ ┃ ┣ 📂Files
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FileException.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜FileNotFoundException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜File.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜FileCollection.php
 ┃ ┃ ┃ ┃ ┣ 📂Filters
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜FilterException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Cors.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜CSRF.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜DebugToolbar.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜FilterInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Filters.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ForceHTTPS.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Honeypot.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜InvalidChars.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜PageCache.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜PerformanceMetrics.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜SecureHeaders.php
 ┃ ┃ ┃ ┃ ┣ 📂Format
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜FormatException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Format.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜FormatterInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜JSONFormatter.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜XMLFormatter.php
 ┃ ┃ ┃ ┃ ┣ 📂Helpers
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Array
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜ArrayHelper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜array_helper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜cookie_helper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜date_helper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜filesystem_helper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜form_helper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜html_helper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜inflector_helper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜kint_helper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜number_helper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜security_helper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜test_helper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜text_helper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜url_helper.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜xml_helper.php
 ┃ ┃ ┃ ┃ ┣ 📂Honeypot
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜HoneypotException.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜Honeypot.php
 ┃ ┃ ┃ ┃ ┣ 📂HotReloader
 ┃ ┃ ┃ ┃ ┃ ┣ 📜DirectoryHasher.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜HotReloader.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜IteratorFilter.php
 ┃ ┃ ┃ ┃ ┣ 📂HTTP
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BadRequestException.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜HTTPException.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜RedirectException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Files
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FileCollection.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜UploadedFile.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜UploadedFileInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜CLIRequest.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ContentSecurityPolicy.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Cors.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜CURLRequest.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜DownloadResponse.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Header.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜IncomingRequest.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Message.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜MessageInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜MessageTrait.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Method.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Negotiate.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜OutgoingRequest.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜OutgoingRequestInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜RedirectResponse.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Request.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜RequestInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜RequestTrait.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ResponsableInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Response.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ResponseInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ResponseTrait.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜SiteURI.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜SiteURIFactory.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜URI.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜UserAgent.php
 ┃ ┃ ┃ ┃ ┣ 📂I18n
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜I18nException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Time.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜TimeDifference.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜TimeLegacy.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜TimeTrait.php
 ┃ ┃ ┃ ┃ ┣ 📂Images
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜ImageException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Handlers
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜GDHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜ImageMagickHandler.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Image.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜ImageHandlerInterface.php
 ┃ ┃ ┃ ┃ ┣ 📂Language
 ┃ ┃ ┃ ┃ ┃ ┣ 📂en
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Cache.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Cast.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜CLI.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Cookie.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Core.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Database.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Email.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Encryption.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Errors.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Fabricator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Files.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Filters.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Format.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜HTTP.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Images.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Language.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Log.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Migrations.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Number.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Pager.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Publisher.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜RESTful.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Router.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Security.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Session.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Test.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Time.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Validation.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜View.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜Language.php
 ┃ ┃ ┃ ┃ ┣ 📂Log
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜LogException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Handlers
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ChromeLoggerHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ErrorlogHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FileHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜HandlerInterface.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜Logger.php
 ┃ ┃ ┃ ┃ ┣ 📂Modules
 ┃ ┃ ┃ ┃ ┃ ┗ 📜Modules.php
 ┃ ┃ ┃ ┃ ┣ 📂Pager
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PagerException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Views
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜default_full.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜default_head.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜default_simple.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Pager.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜PagerInterface.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜PagerRenderer.php
 ┃ ┃ ┃ ┃ ┣ 📂Publisher
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PublisherException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ContentReplacer.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜Publisher.php
 ┃ ┃ ┃ ┃ ┣ 📂RESTful
 ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseResource.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ResourceController.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜ResourcePresenter.php
 ┃ ┃ ┃ ┃ ┣ 📂Router
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MethodNotFoundException.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜RedirectException.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜RouterException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜AutoRouter.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜AutoRouterImproved.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜AutoRouterInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜DefinedRouteCollector.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜RouteCollection.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜RouteCollectionInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Router.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜RouterInterface.php
 ┃ ┃ ┃ ┃ ┣ 📂Security
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜SecurityException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜CheckPhpIni.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Security.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜SecurityInterface.php
 ┃ ┃ ┃ ┃ ┣ 📂Session
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜SessionException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Handlers
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Database
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MySQLiHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PostgreHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ArrayHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BaseHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DatabaseHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FileHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MemcachedHandler.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜RedisHandler.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Session.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜SessionInterface.php
 ┃ ┃ ┃ ┃ ┣ 📂Test
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Constraints
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜SeeInDatabase.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Filters
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜CITestStreamFilter.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Interfaces
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜FabricatorModel.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Mock
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockAppConfig.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockAutoload.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockBuilder.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockCache.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockCLIConfig.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockCodeIgniter.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockCommon.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockConnection.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockCURLRequest.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockEmail.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockEvents.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockFileLogger.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockIncomingRequest.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockInputOutput.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockLanguage.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockLogger.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockQuery.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockResourceController.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockResourcePresenter.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockResponse.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockResult.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockSecurity.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockServices.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MockSession.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜MockTable.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜bootstrap.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜CIUnitTestCase.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ConfigFromArrayTrait.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ControllerTestTrait.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜DatabaseTestTrait.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜DOMParser.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Fabricator.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜FeatureTestTrait.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜FilterTestTrait.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜IniTestTrait.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜PhpStreamWrapper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ReflectionHelper.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜StreamFilterTrait.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜TestLogger.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜TestResponse.php
 ┃ ┃ ┃ ┃ ┣ 📂ThirdParty
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Escaper
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Exception
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ExceptionInterface.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜InvalidArgumentException.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜RuntimeException.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Escaper.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜LICENSE.md
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Kint
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Parser
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜AbstractPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ArrayLimitPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ArrayObjectPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Base64Plugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BinaryPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BlacklistPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ClassMethodsPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ClassStaticsPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ClosurePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ColorPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ConstructablePluginInterface.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DateTimePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DOMDocumentPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜EnumPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FsPathPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜IteratorPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜JsonPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MicrotimePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MysqliPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Parser.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PluginInterface.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ProxyPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜SerializePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜SimpleXMLElementPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜SplFileInfoPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜SplObjectStoragePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜StreamPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜TablePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ThrowablePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜TimestampPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ToStringPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜TracePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜XmlPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Renderer
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Rich
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜AbstractPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ArrayLimitPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BinaryPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BlacklistPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜CallablePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ClosurePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ColorPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DepthLimitPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MethodDefinitionPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MicrotimePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PluginInterface.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜RecursionPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜SimpleXMLElementPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜SourcePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜TablePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜TabPluginInterface.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜TimestampPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜TraceFramePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜ValuePluginInterface.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Text
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜AbstractPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ArrayLimitPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BlacklistPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DepthLimitPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜EnumPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MicrotimePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PluginInterface.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜RecursionPlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜TracePlugin.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜AbstractRenderer.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜CliRenderer.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PlainRenderer.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜RendererInterface.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜RichRenderer.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜TextRenderer.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂resources
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📂compiled
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜aante-dark.css
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜aante-light.css
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜microtime.js
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜original.css
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜plain.css
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜plain.js
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜rich.js
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜shared.js
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜solarized-dark.css
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜solarized.css
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Zval
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Representation
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ColorRepresentation.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MethodDefinitionRepresentation.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MicrotimeRepresentation.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Representation.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜SourceRepresentation.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜SplFileInfoRepresentation.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜BlobValue.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ClosureValue.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DateTimeValue.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜EnumValue.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜InstanceValue.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜MethodValue.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ParameterHoldingTrait.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ParameterValue.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ResourceValue.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜SimpleXMLElementValue.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜StreamValue.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ThrowableValue.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜TraceFrameValue.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜TraceValue.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Value.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜CallFinder.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FacadeInterface.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜init.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜init_helpers.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Kint.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜LICENSE
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Utils.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📂PSR
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📂Log
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜AbstractLogger.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜InvalidArgumentException.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜LICENSE
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜LoggerAwareInterface.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜LoggerAwareTrait.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜LoggerInterface.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜LoggerTrait.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜LogLevel.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜NullLogger.php
 ┃ ┃ ┃ ┃ ┣ 📂Throttle
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Throttler.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜ThrottlerInterface.php
 ┃ ┃ ┃ ┃ ┣ 📂Traits
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ConditionalTrait.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜PropertiesTrait.php
 ┃ ┃ ┃ ┃ ┣ 📂Typography
 ┃ ┃ ┃ ┃ ┃ ┗ 📜Typography.php
 ┃ ┃ ┃ ┃ ┣ 📂Validation
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜ValidationException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂StrictRules
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜CreditCardRules.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FileRules.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜FormatRules.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Rules.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Views
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜list.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜single.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜CreditCardRules.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜DotArrayFilter.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜FileRules.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜FormatRules.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Rules.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Validation.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜ValidationInterface.php
 ┃ ┃ ┃ ┃ ┣ 📂View
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Cells
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Cell.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Exceptions
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜ViewException.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Cell.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Filters.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Parser.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Plugins.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜RendererInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Table.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜View.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ViewDecoratorInterface.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜ViewDecoratorTrait.php
 ┃ ┃ ┃ ┃ ┣ 📜.htaccess
 ┃ ┃ ┃ ┃ ┣ 📜BaseModel.php
 ┃ ┃ ┃ ┃ ┣ 📜Boot.php
 ┃ ┃ ┃ ┃ ┣ 📜bootstrap.php
 ┃ ┃ ┃ ┃ ┣ 📜CodeIgniter.php
 ┃ ┃ ┃ ┃ ┣ 📜Common.php
 ┃ ┃ ┃ ┃ ┣ 📜ComposerScripts.php
 ┃ ┃ ┃ ┃ ┣ 📜Controller.php
 ┃ ┃ ┃ ┃ ┣ 📜index.html
 ┃ ┃ ┃ ┃ ┣ 📜Model.php
 ┃ ┃ ┃ ┃ ┣ 📜rewrite.php
 ┃ ┃ ┃ ┃ ┗ 📜Superglobals.php
 ┃ ┃ ┃ ┣ 📂tests
 ┃ ┃ ┃ ┃ ┣ 📂database
 ┃ ┃ ┃ ┃ ┃ ┗ 📜ExampleDatabaseTest.php
 ┃ ┃ ┃ ┃ ┣ 📂session
 ┃ ┃ ┃ ┃ ┃ ┗ 📜ExampleSessionTest.php
 ┃ ┃ ┃ ┃ ┣ 📂unit
 ┃ ┃ ┃ ┃ ┃ ┗ 📜HealthTest.php
 ┃ ┃ ┃ ┃ ┣ 📂_support
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Database
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Migrations
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜2020-02-22-222222_example_migration.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📂Seeds
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜ExampleSeeder.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Libraries
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜ConfigReader.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📂Models
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜ExampleModel.php
 ┃ ┃ ┃ ┃ ┣ 📜.htaccess
 ┃ ┃ ┃ ┃ ┣ 📜index.html
 ┃ ┃ ┃ ┃ ┗ 📜README.md
 ┃ ┃ ┃ ┣ 📂writable
 ┃ ┃ ┃ ┃ ┣ 📂cache
 ┃ ┃ ┃ ┃ ┃ ┗ 📜index.html
 ┃ ┃ ┃ ┃ ┣ 📂logs
 ┃ ┃ ┃ ┃ ┃ ┗ 📜index.html
 ┃ ┃ ┃ ┃ ┣ 📂session
 ┃ ┃ ┃ ┃ ┃ ┗ 📜index.html
 ┃ ┃ ┃ ┃ ┣ 📂uploads
 ┃ ┃ ┃ ┃ ┃ ┗ 📜index.html
 ┃ ┃ ┃ ┃ ┣ 📜.htaccess
 ┃ ┃ ┃ ┃ ┗ 📜index.html
 ┃ ┃ ┃ ┣ 📜composer.json
 ┃ ┃ ┃ ┣ 📜env
 ┃ ┃ ┃ ┣ 📜LICENSE
 ┃ ┃ ┃ ┣ 📜phpunit.xml.dist
 ┃ ┃ ┃ ┣ 📜preload.php
 ┃ ┃ ┃ ┣ 📜README.md
 ┃ ┃ ┃ ┗ 📜spark
 ┃ ┣ 📂composer
 ┃ ┃ ┣ 📜autoload_classmap.php
 ┃ ┃ ┣ 📜autoload_namespaces.php
 ┃ ┃ ┣ 📜autoload_psr4.php
 ┃ ┃ ┣ 📜autoload_real.php
 ┃ ┃ ┣ 📜autoload_static.php
 ┃ ┃ ┣ 📜ClassLoader.php
 ┃ ┃ ┣ 📜installed.json
 ┃ ┃ ┣ 📜installed.php
 ┃ ┃ ┣ 📜InstalledVersions.php
 ┃ ┃ ┣ 📜LICENSE
 ┃ ┃ ┗ 📜platform_check.php
 ┃ ┣ 📂laminas
 ┃ ┃ ┗ 📂laminas-escaper
 ┃ ┃ ┃ ┣ 📂src
 ┃ ┃ ┃ ┃ ┣ 📂Exception
 ┃ ┃ ┃ ┃ ┃ ┣ 📜ExceptionInterface.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜InvalidArgumentException.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜RuntimeException.php
 ┃ ┃ ┃ ┃ ┗ 📜Escaper.php
 ┃ ┃ ┃ ┣ 📜composer.json
 ┃ ┃ ┃ ┣ 📜COPYRIGHT.md
 ┃ ┃ ┃ ┣ 📜LICENSE.md
 ┃ ┃ ┃ ┗ 📜README.md
 ┃ ┣ 📂psr
 ┃ ┃ ┗ 📂log
 ┃ ┃ ┃ ┣ 📂src
 ┃ ┃ ┃ ┃ ┣ 📜AbstractLogger.php
 ┃ ┃ ┃ ┃ ┣ 📜InvalidArgumentException.php
 ┃ ┃ ┃ ┃ ┣ 📜LoggerAwareInterface.php
 ┃ ┃ ┃ ┃ ┣ 📜LoggerAwareTrait.php
 ┃ ┃ ┃ ┃ ┣ 📜LoggerInterface.php
 ┃ ┃ ┃ ┃ ┣ 📜LoggerTrait.php
 ┃ ┃ ┃ ┃ ┣ 📜LogLevel.php
 ┃ ┃ ┃ ┃ ┗ 📜NullLogger.php
 ┃ ┃ ┃ ┣ 📜composer.json
 ┃ ┃ ┃ ┣ 📜LICENSE
 ┃ ┃ ┃ ┗ 📜README.md
 ┃ ┗ 📜autoload.php
 ┣ 📂writable
 ┃ ┣ 📂cache
 ┃ ┃ ┗ 📜index.html
 ┃ ┣ 📂debugbar
 ┃ ┃ ┣ 📜debugbar_1720501194.812689.json
 ┃ ┃ ┣ 📜debugbar_1720501198.634082.json
 ┃ ┃ ┣ 📜debugbar_1720501200.474686.json
 ┃ ┃ ┣ 📜debugbar_1720501203.564319.json
 ┃ ┃ ┣ 📜debugbar_1720501345.443640.json
 ┃ ┃ ┣ 📜debugbar_1720501346.937579.json
 ┃ ┃ ┣ 📜debugbar_1720501348.491087.json
 ┃ ┃ ┣ 📜debugbar_1720501360.364935.json
 ┃ ┃ ┣ 📜debugbar_1720501409.665306.json
 ┃ ┃ ┣ 📜debugbar_1720501411.349465.json
 ┃ ┃ ┣ 📜debugbar_1720501419.620961.json
 ┃ ┃ ┣ 📜debugbar_1720501467.094129.json
 ┃ ┃ ┣ 📜debugbar_1720501470.078065.json
 ┃ ┃ ┣ 📜debugbar_1720501472.154857.json
 ┃ ┃ ┣ 📜debugbar_1720501474.311428.json
 ┃ ┃ ┣ 📜debugbar_1720501475.158196.json
 ┃ ┃ ┣ 📜debugbar_1720501488.296393.json
 ┃ ┃ ┣ 📜debugbar_1720501491.501749.json
 ┃ ┃ ┣ 📜debugbar_1720501492.310567.json
 ┃ ┃ ┗ 📜debugbar_1720501496.671319.json
 ┃ ┣ 📂logs
 ┃ ┃ ┣ 📜index.html
 ┃ ┃ ┗ 📜log-2024-07-09.log
 ┃ ┣ 📂session
 ┃ ┃ ┗ 📜index.html
 ┃ ┣ 📂uploads
 ┃ ┃ ┗ 📜index.html
 ┃ ┣ 📜.htaccess
 ┃ ┗ 📜index.html
 ┣ 📜.env
 ┣ 📜.gitignore
 ┣ 📜.LICENSE
 ┣ 📜builds
 ┣ 📜composer.json
 ┣ 📜composer.lock
 ┣ 📜phpunit.xml.dist
 ┣ 📜preload.php
 ┣ 📜README.md
 ┣ 📜spark
 ┗ 📜store.sql



