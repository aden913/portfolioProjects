<%@ Page Language="VB" AutoEventWireup="false" CodeFile="Congratulations.aspx.vb" Inherits="Congratulations" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Congrats!</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <h1>Account Created!</h1>
            <asp:Label ID="lblCongrats" runat="server" Text="Congatulations, your account was created!"></asp:Label>
            <asp:Button ID="btnReturn" runat="server" Text="Return" />
        </div>
    </form>
</body>
</html>
