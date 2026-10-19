repetir = "s"
while repetir == "s":
    pila = []
    op = ""
    while op != "4":
        print("\n1. Insertar pila  2. Borrar en pila  3. Listar pila  4. Salir")
        op = input("Opción: ")
        
        if op == "1":
            pila.append(input("Ingresa un número: "))
        elif op == "2":
            if pila: pila.pop() # pop() saca el último
        elif op == "3":
            print("Lista actual:", pila)

    repetir = input("¿Ejecutar nuevamente el programa? (s/n): ")