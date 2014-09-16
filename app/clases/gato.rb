#!/usr/bin/env ruby
# gato.rb
require 'mongo_mapper'

class Gato
    include MongoMapper::Document
    MongoMapper.database = 'miaudopciones'
    key :nombre, String
    key :apodos, String
    key :edad, Integer
    key :color, String
    key :raza, String
    key :descripcion, String
    key :macho, Boolean
    key :historia_medica, String

    def texto_edad()
        texto_edad = ''
        num_anios = @edad
        if num_anios < 12
            texto_edad << num_anios.to_s + ' mes(es)'
        else
            num_anios = (@edad / 12).floor
            num_meses = @edad % 12
            if num_anios > 0
                texto_edad << num_anios.to_s + ' anio(s)'
            end
            if num_meses > 0
                texto_edad << ' ' + num_meses.to_s + ' mes(es)'
            end
        end
    end
    
    def texto_sexo()
        return 'Gato' if @macho
        return 'Gata'
    end
end
