import mysql.connector
try:
    connection= mysql.connector.connect(
        host='localhost',
        port=3306,
        user='root',
        password='root',
        db='mibasekanapo'
    )
    if connection.is_connected():
        print("conexion exitosa")
        cursor=connection.cursor()
        sql="SELECT avg(case when persona.departamento='01' then inscripcion.notafinal end) CH, avg(case when persona.departamento='02' then inscripcion.notafinal end) LP, avg(case when persona.departamento='03' then inscripcion.notafinal end) CB, avg(case when persona.departamento='04' then inscripcion.notafinal end) RU, avg(case when persona.departamento='05' then inscripcion.notafinal end) PT, avg(case when persona.departamento='06' then inscripcion.notafinal end) TA, avg(case when persona.departamento='07' then inscripcion.notafinal end) SC, avg(case when persona.departamento='08' then inscripcion.notafinal end) BE, avg(case when persona.departamento='09' then inscripcion.notafinal end ) PD from persona, inscripcion where persona.ci=inscripcion.ciestudiante"
        cursor.execute(sql)
        depar = cursor.fetchall()
        #print(depar)
        for depar in depar:
            print("Departamento\t|","Media")
            print("\n----------------|-------")
            print("\nChuquisaca\t|", round(depar[0],2))
            print("\nLa Paz\t\t|", round(depar[1],2))
            print("\nCochabamba\t|", round(depar[2],2))
            print("\nOruro\t\t|", round(depar[3],2))
            print("\nPotosi\t\t|", round(depar[4],2))
            print("\nTarija\t\t|", round(depar[5],2))
            print("\nSanta Cruz\t|", round(depar[6],2))
            print("\nBeni\t\t|", round(depar[7],2))
            print("\nPando\t\t|", round(depar[8],2))        
        cursor.close()
        connection.close()
except Exception as ex:
    print(ex)
    