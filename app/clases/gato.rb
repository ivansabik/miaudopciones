#!/usr/bin/env ruby
# gato.rb
class Gato
	# Mongoid para mapear
	include Mongoid::Document
    field :title, type: String
    field :body, type: String
    
	def texto_edad()
		texto_edad = ''
		num_anios = @edad
		if num_anios < 12
			texto_edad << num_anios.to_s + ' meses'
		else
			num_anios = (@edad / 12).floor
			num_meses = @edad % 12
			if num_anios > 0
				texto_edad << num_anios.to_s + ' anios'
			end
			if num_meses > 0
				texto_edad << ' ' + num_meses.to_s + ' meses'
			end
		end
	end
	
	def texto_sexo()
		return 'Gato' if @macho
		return 'Gata'
	end
	
	def edad=(edad)
		@edad = edad
	end
	
	def edad
		@edad
	end  
	
	def macho=(is_macho)
		@macho = is_macho
	end
	
	def macho
		@macho
	end
	
	def apodos=(apodos)
		@akas = apodos
	end
	
	def apodos
		@apodos
	end  
	
	def nombre=(nombre)
		@nombre = nombre
	end
	
	def nombre
		@nombre
	end
	
	def color=(color)
		@color = color
	end
	
	def color
		@color
	end
	
	def raza=(raza)
		@raza = raza
	end
	
	def raza
		@raza
	end
	
	def descripcion=(descripcion)
		@descripcion = descripcion
	end
	
	def descripcion
		@descripcion
	end
	
	def historia_medica=(historia_medica)
		@historia_medica = historia_medica
	end
	
	def historia_medica
		@historia_medica
	end
end
