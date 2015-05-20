#!/usr/bin/env ruby
# datos_prueba.rb
require './models/gato'
require './models/info_nosotros'

info_nosotros = InfoNosotros.new(:nombre => 'Gatibanda',
    :lat => 19.3963,
    :lon => -99.1886,
    :descripcion => 'Somos una AC que rescata gatiamigos',
    :usuario => 'verwalter',
    :hashim => '',
    :email => 'info@gatibanda.org',
    :fb => 'gatibanda',
    :movil => '0445555555555',
    :fijo => '5555555555',
    :estilo => 'journal.css')
info_nosotros.save

gato = Gato.new(:nombre => 'Fabricio',
    :apodos => '',
	:edad => 16,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => true,
    :thumbnail => 'https://scontent.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/11234814_884619964930626_8333553414228615057_n.jpg?oh=686a344eb61d45780143788ce1013908&oe=55C4DC97',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Santino',
    :apodos => '',
	:edad => 14,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => true,
    :thumbnail => 'https://scontent.xx.fbcdn.net/hphotos-xat1/v/t1.0-9/11255810_884619958263960_4418661327760039094_n.jpg?oh=67dbffafe769984b19b4afe54009057b&oe=5603CCEB',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Donatella',
    :apodos => '',
	:edad => 8,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => false,
    :thumbnail => 'https://scontent.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/11295668_884619954930627_1875428113605407383_n.jpg?oh=047342fccd2c3feb14a65e8dddd623f7&oe=56019730',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Refugio',
    :apodos => 'Cuca',
	:edad => 9,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => false,
    :thumbnail => 'https://scontent.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/11009150_884619931597296_6208217298793318555_n.jpg?oh=18ee11172f728e9be8110958864814fc&oe=55CEA411',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Napolitana',
    :apodos => '',
	:edad => 7,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => false,
    :thumbnail => 'https://scontent.xx.fbcdn.net/hphotos-xta1/v/t1.0-9/11127591_884619928263963_4421958988769907630_n.jpg?oh=3b5e48d9d2984fa45a16c8559aff5b62&oe=55C63292',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Lester',
    :apodos => '',
	:edad => 14,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => false,
    :thumbnail => 'https://scontent.xx.fbcdn.net/hphotos-xta1/v/t1.0-9/11265598_884619924930630_3111262658073165206_n.jpg?oh=4c7f8373872e85e066fd081cc3559db2&oe=5609DB80',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Julian',
    :apodos => '',
	:edad => 20,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => false,
    :thumbnail => 'https://scontent.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/11010613_884619894930633_5132289801984761499_n.jpg?oh=75d72c6d19c427eff3faf22cf81af0d5&oe=55BFF322',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Mortimer',
    :apodos => '',
	:edad => 18,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => false,
    :thumbnail => 'https://scontent.xx.fbcdn.net/hphotos-xft1/v/t1.0-9/11263100_884619891597300_5350435593272482752_n.jpg?oh=e31ba0b4f13c6eacddc3112c3d90cf6d&oe=56095037',
	:historia_medica => '')
gato.save

gato = Gato.new(:nombre => 'Ludovico',
    :apodos => '',
	:edad => 2,
	:color => '',
    :raza => '',
    :descripcion => '',
	:macho => false,
    :thumbnail => 'https://scontent.xx.fbcdn.net/hphotos-xta1/v/t1.0-9/11218983_884619888263967_5863729856078759571_n.jpg?oh=996e52da033d4c4dc8150c7203fa5b93&oe=55BF8779',
	:historia_medica => '')
gato.save

puts 'Listos los datos pueba'
