select * from odt_soft.users, 
			  odt_soft.patient, 
              odt_soft.hospital, 
              odt_soft.stats, 
              odt_soft.hospital_itu, 
              odt_soft.appointment,
              odt_soft.attendance,
              odt_soft.admission_cause
where `users`.id = `attendance`.doctor_responsible
and   `patient`.id = `attendance`.patient
and   `hospital`.id = `attendance`.hospital
and   `stats`.id = `appointment`.status
and   `hospital_itu`.id = `attendance`.hospital
and   `appointment`.attendance = `attendance`.id
and   `admission_cause`.id = `attendance`.admission_cause;

