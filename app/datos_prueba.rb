#!/usr/bin/env ruby
# datos_prueba.rb
require './models/gato'
require './models/info_nosotros'

info_nosotros = InfoNosotros.new(:nombre => 'Kitlers',
    :lat => 19.3963,
    :lon => -99.1886,
    :descripcion => 'Somos una AC que rescata kitlers',
    :usuario => 'verwalter',
    :hashim => '',
    :email => 'info@kitlers.org',
    :fb => 'katzimiau',
    :movil => '0445555555555',
    :fijo => '5555555555',
    :estilo => 'journal.css')
info_nosotros.save

gato = Gato.new(:nombre => 'Anton',
    :apodos => '',
	:edad => 0,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => true,
    :thumbnail => 'https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-9/1797621_1563149413913698_2861361894512337922_n.jpg?oh=06cc6e74f58062bd10d6f1fbb5d85a70&oe=549103C4&__gda__=1417991029_59f46e8c6f18e7d138cc3489320b6ca1',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Berthold',
    :apodos => '',
	:edad => 0,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => true,
    :thumbnail => 'https://scontent-a-dfw.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10653663_1563149397247033_346621144152368509_n.jpg?oh=cc2a0b0003418c17c9cb7704f4856f2f&oe=54C680F6',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Werner',
    :apodos => '',
	:edad => 0,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => true,
    :thumbnail => 'https://scontent-a-dfw.xx.fbcdn.net/hphotos-xaf1/v/t1.0-9/10641135_1563149153913724_9001005291520364733_n.jpg?oh=dbac0fee577415fdffaea45b9c6191dd&oe=5493B874',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Helmut',
    :apodos => '',
	:edad => 0,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => true,
    :thumbnail => 'https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/10670060_1563149160580390_6819511584467757536_n.jpg?oh=52aee60a961e0ea903d2d6bc9444f7b7&oe=54C221AA&__gda__=1422924691_25ec0a6f28e85ba209c639e66f132c40',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Gertrud',
    :apodos => '',
	:edad => 0,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => false,
    :thumbnail => 'https://scontent-b-dfw.xx.fbcdn.net/hphotos-xap1/v/l/t1.0-9/10635854_1563149067247066_1845465205776398952_n.jpg?oh=f5828bcadfb315530a5630ec23ebe442&oe=54C911F9',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Bertha',
    :apodos => '',
	:edad => 0,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => false,
    :thumbnail => 'https://scontent-a-dfw.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10703632_1563149050580401_3229245053472535057_n.jpg?oh=6d5bff987f347c652c9975266b02251c&oe=54CCF76D',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Clara',
    :apodos => '',
	:edad => 0,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => false,
    :thumbnail => 'https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10712786_1563149037247069_8684845931484353533_n.jpg?oh=fc3de92db7dd6010b94702d3363adcd1&oe=5484DDC9&__gda__=1418783734_82fdc2c6ad25ecc1708cb391f8907064',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Olga',
    :apodos => '',
	:edad => 0,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => false,
    :thumbnail => 'https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/1521328_1563148987247074_8981415434987495748_n.jpg?oh=6a7e5251c7536df8cc74b081c5487400&oe=54CC76BA&__gda__=1421912422_06de75ac3117d93e5a3c7e8f74be805e',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Gretchen',
    :apodos => '',
	:edad => 0,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => false,
    :thumbnail => 'https://scontent-a-dfw.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/10685494_1563148967247076_1490546819469619495_n.jpg?oh=0895fb1acb03ab580689ba34f1938438&oe=54C456A2',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Franziska',
    :apodos => '',
	:edad => 0,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => false,
    :thumbnail => 'https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10689569_1563148930580413_6665570438618389346_n.jpg?oh=e2156c8abf46b3889bb9b8a1737bf480&oe=54CA6357&__gda__=1418179901_dbccbe96c11e12a14510108a6f02170f',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Konrad',
    :apodos => '',
	:edad => 0,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => true,
    :thumbnail => 'https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10645068_1563148890580417_6071487740734925399_n.jpg?oh=467e31be1d0c61f20ede6dc3468e1788&oe=54C6FCEE&__gda__=1422436484_c4d45cdd23bb5cfe23702910dd4e734d',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Theodor',
    :apodos => '',
	:edad => 0,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => true,
    :thumbnail => 'https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/10616585_1563148883913751_7138728203987001666_n.jpg?oh=a6e837347b482fe546b8238f1ba105a6&oe=54CCC343&__gda__=1422495251_99607129c6480ab1f10a142eedeebc0c',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Hildegard',
    :apodos => '',
	:edad => 0,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => false,
    :thumbnail => 'https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10517557_1563148853913754_218285865023592462_n.jpg?oh=0076d03da2ec1c0aa1bf43544ea29b3e&oe=548A1578&__gda__=1421783488_7f4d93edab421e2eac2042339cb83551',
	:historia_medica => '')
gato.save

puts 'Listos los datos pueba'
