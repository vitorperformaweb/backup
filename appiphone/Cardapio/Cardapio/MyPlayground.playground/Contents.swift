//: Playground - noun: a place where people can play

import UIKit


class refeicao{
    var nome:String
    var nota:Int
    
    var itens = Array<item>()
    
    init(nome:String, nota:Int){
        self.nome = nome;
        self.nota = nota;
    }
    var total:Double = 0.0
    func somaCalorias() -> Double {
        for i in itens{
            total += i.calorias
        }
        return total;
    }
}

class item{
    var nome : String
    var calorias : Double
    init(nome:String, calorias:Double){
        self.nome = nome;
        self.calorias = calorias;
    }
}

let almoco = refeicao(nome: "Macarrao", nota: 5);
almoco.itens.append(item(nome: "Molho", calorias: 200));
almoco.itens.append(item(nome: "Massa", calorias: 340));
var totalCalorias = almoco.somaCalorias();
print(totalCalorias);

