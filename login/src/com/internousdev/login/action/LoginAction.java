package com.internousdev.login.action;

import java.sql.SQLException;

import com.internousdev.login.dao.LoginDAO;
import com.internousdev.login.dto.LoginDTO;
import com.opensymphony.xwork2.ActionSupport;

<<<<<<< HEAD
public class LoginAction extends ActionSupport{
=======
public class LoginAction extends ActionSupport {
>>>>>>> 8d1f728a61a7d9c9864df334d1ee89c4cebaf51e
	private String name;
	private String password;

	public String execute() throws SQLException{
		String ret = ERROR;
		LoginDAO dao = new LoginDAO();
		LoginDTO dto = new LoginDTO();

		dto = dao.select(name, password);
		if(name.equals(dto.getName())){
			if(password.equals(dto.getPassword())){
				ret = SUCCESS;
			}
		}
	return ret;
	}
	public String getName(){
		return name;
	}
	public void setName(String name){
		this.name = name;
	}
	public String getPassword(){
		return password;
	}
	public void setPasswod(String password){
		this.password = password;
	}
}
