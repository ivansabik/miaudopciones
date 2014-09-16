#!/usr/bin/env ruby
# info_nosotros.rb
require 'mongo_mapper'

class InfoNosotros
    include MongoMapper::Document
    MongoMapper.database = 'miaudopciones'
    key :nombre, String
    key :lat, Float
    key :lon, Float
    key :usuario, String
    key :hashim, String
    key :email, String
    key :fb, String
    key :movil, String
    key :fijo, String
    key :estilo, String
end
