    protected void Verify_Click(object sender, EventArgs e)
    {
        string connectionString = @"myConnectionString";
        int count;
        using (SqlConnection cn = new SqlConnection(connectionString))
        {
            cn.Open();
            string sqlStatement = @"Select Count(1) From SomeTable Where ID= '" + this.Id.Text + "' AND Password= '" + this.Password.Text + "'";
            SqlCommand sqlCommand = new SqlCommand(sqlStatement, cn);
            count = (int)sqlCommand.ExecuteScalar();
        }

        this.Result.Text = (count > 0) ? "Pass" : "帳號或密碼錯誤";
    }