//
//  ViewController.swift
//  Cardapio
//
//  Created by Vitor Avanço on 12/01/17.
//  Copyright © 2017 Vitor Avanço. All rights reserved.
//

import UIKit
class ViewController: UIViewController {
    
    @IBOutlet var nameField:UITextField?
    @IBOutlet var happinessField:UITextField?
    
    @IBAction func add(){
        if (nameField == nil || happinessField == nil){
            return
        }
        let name = nameField!.text
        let happiness = Int(happinessField!.text!)
        
        if happiness != nil{
            let prato = refeicao(name: name!, happiness: happiness!);
            print("Prato cadastrado: \(prato.name) \(prato.happiness)");
        }else{
            return
        }
        
        
    }
}
