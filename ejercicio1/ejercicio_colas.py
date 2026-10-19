repetir = "s"
while repetir == "s":
    cola = []
    op = ""
    while op != "4":
        print("\n1. Insertar cola  2. Borrar en cola  3. Listar cola  4. Salir")
        op = input("Opción: ")
        
        if op == "1":
            cola.append(input("Ingresa un número: "))
        elif op == "2":
            if cola: cola.pop(0) # pop(0) saca el primero
        elif op == "3":
            print("Lista actual:", cola)

    repetir = input("¿Ejecutar nuevamente el programa? (s/n): ")