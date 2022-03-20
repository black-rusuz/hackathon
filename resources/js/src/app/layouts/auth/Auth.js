import logo_mono from "./logo_mono.png"
import {Button, TextField} from "@mui/material";
import "./style.scss"

export default function Auth() {
    return (
        <div style={{background: '#FFDD00'}}>
            <header style={{position: "fixed", padding: "28px 35px"}}>
                <img className="header__logo" src={logo_mono} alt={"Oggetto logo"}/>
            </header>
            <main style={{height: "100vh", display: "flex", justifyContent: "center"}}>
                <div className="auth">
                    <h1 className="auth__header">Добро пожаловать в систему тестирования!</h1>
                    <span className="auth__comment">Пожалуйста, авторизируйтесь</span>
                    <TextField className="auth__input" color="secondary" id="outlined-basic" label="E-mail" variant="outlined" />
                    <TextField className="auth__input" color="secondary" id="outlined-basic" label="Пароль" variant="outlined" />
                    <Button className="auth__submit" variant="contained" to="/admin">Войти</Button>
                </div>
            </main>
        </div>
    );
}
