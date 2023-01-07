<%@ Page Language="VB" AutoEventWireup="false" CodeFile="ErrorPage.aspx.vb" Inherits="ErrorPage" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <h1>Unknown Error occurred, return and try again</h1>
            <asp:Button ID="btnReturn" runat="server" Text="Return" />
        </div>
    </form>
</body>
</html>
