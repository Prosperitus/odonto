/*
*Exemplo de Update para atualizar o status do atendimento
*/
UPDATE odt_soft.attendance 
SET attendance.status = ? 
WHERE attendance.id = ?
