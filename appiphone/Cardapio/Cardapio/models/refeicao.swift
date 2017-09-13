//
//  refeicao.swift
//  Cardapio
//
//  Created by Vitor Avanço on 13/01/17.
//  Copyright © 2017 Vitor Avanço. All rights reserved.
//

import Foundation

class refeicao{
    let name:String
    let happiness:Int
    
    var items = Array<Item>();
    
    init(name:String,happiness:Int) {
        self.name = name;
        self.happiness = happiness;
    }
    
    func allCalories() -> Double {
        var total = 0.0
        for item in items{
            total += item.calories
        }
        return total
    }
}
